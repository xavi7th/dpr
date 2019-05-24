<template>
  <section class="content">
    <hr>
    <h5 id="caps">LPG REPORTS</h5>
    <div class="row">
      <div class="col-md-3">
        <div class="box box-widget widget-user-2">
          <div class="widget-user-header bg-light-blue-active">
            <h3 class="widget-user-username">Penetration &amp; Population Densities</h3>
            <h5 class="widget-user-desc">Enter a state below to view reports</h5>
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
              <li>
                <div class="d-flex">
                  <v-select
                    :options="states"
                    v-model="selected_state"
                    :reduce="state => state.id"
                    class="flex-fill"
                  ></v-select>

                  <span class="w-30">
                    <a @click="viewReport" class="btn btn-info btn-flat btn-block">Go!</a>
                  </span>
                </div>
                <!-- <a href="/view_atc_records?val=lpg_atc">
                  View
                  <i class="pull-right fa fa-search"></i>
                </a>-->
              </li>

              <!-- <li>
                <v-select :options="states" v-model="selected_state" :reduce="country => country.code"></v-select>
              </li>-->
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="box box-widget widget-user-2">
          <div class="widget-user-header bg-light-blue-active">
            <h3 class="widget-user-username">Search For Application Details</h3>
            <h5 class="widget-user-desc">Enter an application ID to view its details</h5>
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
              <li>
                <a href @click.prevent="changeComponent('search-application')">
                  Track
                  <i class="pull-right fa fa-search"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import { getStates } from "@js-assets/routes";

  export default {
    name: "ReportsDashboard",
    props: ["propsData"],
    data() {
      return {
        states: [
          {
            /**Full options data sample. OR an array of strings*/
            label: "Canada",
            code: "ca"
          }
        ],
        selected_state: null
      };
    },
    created() {
      axios.get(getStates).then(rsp => {
        this.states = rsp.data.data;
      });
    },
    methods: {
      viewReport() {
        if (this.selected_state) {
          this.$emit("change-component", {
            component: "lpg-penetration-report",
            payload: { selected_state: this.selected_state }
          });
        } else {
          swal("Choose a state");
        }
      },
      changeComponent(component, payload) {
        this.$emit("change-component", {
          component,
          payload
        });
      }
    }
  };
</script>

<style lang="scss" scoped>
  hr {
    border-top: 1px solid #ccc;
  }

  #caps {
    text-transform: uppercase;
    font-weight: bold;
    font-size: 17px;
  }

  .small-box h3 {
    font-size: 24px;
    text-transform: uppercase;
  }

  .widget-user-2 .widget-user-username {
    font-size: 24px;
    font-weight: bold;
    margin-left: 0;
    text-transform: uppercase;
  }

  .widget-user-2 .widget-user-username,
  .widget-user-2 .widget-user-desc {
    margin-left: 0;
  }

  .small-box .icon {
    font-size: 70px;
  }

  .small-box:hover .icon {
    font-size: 70px;
    color: #fff;
  }

  .small-box p {
    visibility: hidden;
  }

  .hider {
    visibility: hidden;
  }

  .w-30 {
    width: 30% !important;
  }
</style>
