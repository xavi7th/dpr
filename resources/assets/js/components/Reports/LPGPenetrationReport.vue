<template>
  <div class="row justify-content-center d-flex mt-4">
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

        <div class="box-body">
          <div class="row">
            <div class="col-xs-12">
              <!-- <GChart type="PieChart" @ready="onChartReady" :data="chartData"/> -->
              <GChart
                type="PieChart"
                :data="chartData"
                :options="chartOptions"
                style="width: 100%; min-height: 500px;"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import { getLPGPenetration } from "@js-assets/routes";
  import { GChart } from "vue-google-charts";
  export default {
    name: "LPGPenetrationReport",
    components: { GChart },
    props: ["propsData"],
    mounted() {},
    data() {
      return {
        columns: [
          // { label: "", component: "row-img", sortable: false },
          { label: "#", field: "id", sortable: false },
          { label: "Local Govt", field: "name", sortable: true },
          { label: "Population", field: "population", sortable: false },
          { label: "Area (km2)", field: "area", sortable: false },
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
        page: 1,
        per_page: 10,
        chartData: [
          /** for bar chart */
          // ["Year", "Sales", "Expenses", "Profit"],
          // ["2014", 1000, 400, 200],
          // ["2015", 1170, 460, 250],
          // ["2016", 660, 1120, 300],
          // ["2017", 1030, 540, 350]
          /** for pie chart */
          // [
          //   { label: "Task", type: "string" },
          //   { label: "Hours per Day", type: "string" },
          //   { role: "tooltip", type: "string" }
          // ],
          // ["Work", 11, "2"],
          // ["Eat", 2, "32"],
          // ["Commute", 2, "12"],
          // ["Watch TV", 2, "9"],
          // ["Sleep", 7, "10"]
        ],
        chartOptions: {
          // chart: {
          //   title: "Company Performance",
          //   subtitle: "Sales, Expenses, and Profit: 2014-2017"
          // },
          title: "Population Density vs No. of Plants",
          /** for pie chart */
          is3D: true,
          legend: "none"
        }
      };
    },
    methods: {
      onChartReady(chart, api) {
        // const dataTable = new api.visualization.DataTable();
        // dataTable.addColumn("string", "Name");
        // dataTable.addColumn("number", "Sales");
        // dataTable.addColumn({
        //   type: "string",
        //   role: "tooltip"
        // });
        // dataTable.addRows([
        //   ["Name", 1000, "Tooltip string"],
        //   ["Name", 1170, "Tooltip string"],
        //   ["Name", 660, "Tooltip string"]
        // ]);
        // this.chartData = dataTable;
      },
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

              this.chartData = [
                [
                  { label: "Task", type: "string" },
                  { label: "Hours per Day", type: "string" },
                  { role: "tooltip", type: "string" }
                ],
                ...Object.keys(response.data.data).map(function(key) {
                  return [
                    response.data.data[key]["name"],
                    response.data.data[key]["app_doc_reviews_count"],
                    `${response.data.data[key]["name"]} (Density: ${
                      response.data.data[key]["density"]
                    }, Filling plants: ${
                      response.data.data[key]["app_doc_reviews_count"]
                    })`
                  ];
                })
              ];
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
