<template>
  <div>
    <div class="col-md-9">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Inbox</h3>
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

          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Name of Company</th>
                <th>Name of Gas plant</th>
                <th>Application Type</th>
                <th>Sub-Category</th>
                <th>Source</th>
                <th>Date Received</th>
              </tr>
            </thead>
            <tbody>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=202&applicationIndex=58"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >jerrycan industries</a>
                </td>
                <td style="color: #333;">aloesoothe</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">LTO</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Mon, Mar 18, 2019 2:28 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=197&applicationIndex=57"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >jerrycan industries</a>
                </td>
                <td style="color: #333;">aloesoothe</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 17, 2019 11:58 AM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
              <tr class>
                <td class>
                  <a
                    href="/stDocument_review?inboxIndex=169&applicationIndex=52"
                    class
                    style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;"
                  >cowin industries</a>
                </td>
                <td style="color: #333;">vans</td>
                <td style="color: #333;">LPG Retailer Outlets</td>
                <td style="color: #333;">Pressure Testing</td>
                <td style="color: #333;">Team Lead</td>
                <td style="color: #333;">Sun, Mar 3, 2019 9:21 PM</td>
              </tr>
            </tbody>
          </table>
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
        console.log(params);
        // console.log(setRowData);

        axios
          .get(getLPGPenetration(this.propsData.selected_state, "lpg"), {
            params
          })
          .then(
            function(response) {
              // console.log(response.data.data);

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

<style lang="scss" scoped>
</style>
