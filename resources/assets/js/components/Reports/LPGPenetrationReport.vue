<template>
  <div>
    <div class="col-md-9">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">
            <button
              class="btn btn-success btn-flat"
              @click="$emit('view-reports-dashboard')"
            >Back to Reports Dashboard</button>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div id="table" class="col-xs-12 table-responsive">
              <datatable :columns="columns" :data="getData"></datatable>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 form-inline">
              <datatable-pager v-model="page" type="abbreviated" :per-page="per_page"></datatable-pager>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
</template>

<script>
  import { getLPGPenetration } from "@js-assets/routes";
  export default {
    name: "LPGPenetrationReport",
    props: ["propsData"],
    mounted() {},
    data() {
      return {
        columns: [
          // { label: "", component: "row-img", sortable: false },
          { label: "#", field: "id", sortable: false },
          { label: "Local Govt", field: "name", sortable: true },
          { label: "Population", field: "population", sortable: false },
          { label: "Area", field: "area", sortable: false },
          {
            label: "Density(Population/km2)",
            field: "density",
            sortable: false
          },
          {
            label: "Refilling Plants",
            field: "app_doc_reviews_count",
            sortable: true
          }
          // {
          //   label: "Refilling Plant",
          //   representedAs: function(row) {
          //     return row.launch_success ? "Yes" : "No";
          //   },
          //   sortable: false
          // }
        ],
        rows: window.rows,
        page: 1,
        per_page: 10
      };
    },
    methods: {
      getData: function(params, setRowData) {
        axios
          .get(getLPGPenetration(this.propsData.selected_state, "lpg"), {
            params
          })
          .then(
            function(response) {
              var start_index = (params.page_number - 1) * params.page_length;
              var end_index = start_index + params.page_length;

              setRowData(
                response.data.data.slice(start_index, end_index),
                response.data.data.length
              );
            }.bind(this)
          );
      }
    }
  };
</script>

<style lang="scss">
  .sort.glyphicon {
    cursor: pointer;
  }
  .pagination {
    li:not(.active) {
      cursor: pointer;
    }
  }
</style>
