<template>
  <div>
    <transition name="fade">
      <div class="details" v-if="application_details">
        <div class="container-fluid">
          <section class="content-header d-flex justify-content-between">
            <h1>
              Application Review
              <small>Staff Control panel</small>
            </h1>
            <div class="ml-auto mr-2">
              <button
                type="button"
                class="btn bg-teal btn-flat"
                @click="application_details = null"
              >Find Another Application</button>
            </div>
          </section>

          <section class="content">
            <div class="row">
              <div class="col-md-4">
                <div class="box box-primary">
                  <div class="box-body box-profile">
                    <h3
                      class="profile-username text-center"
                      v-if="application_details.applicationReview.sub_category == 'CAT-D LTO'"
                    >{{ application_details.applicationReview.company.company_name }}</h3>

                    <h3
                      class="profile-username text-center"
                      v-else
                    >{{ application_details.applicationReview.name_of_gas_plant }}</h3>

                    <p
                      class="text-muted text-center"
                    >{{ application_details.applicationReview.application_id }}</p>

                    <ul class="list-group list-group-unbordered">
                      <li class="list-group-item">
                        <b>Application type</b>
                        <a
                          class="pull-right"
                        >{{ application_details.applicationReview.application_type }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Sub-category</b>
                        <a
                          class="pull-right"
                        >{{ application_details.applicationReview.sub_category }}</a>
                      </li>

                      <li
                        class="list-group-item"
                        v-if="application_details.applicationReview.sub_category == 'CAT-D LTO'"
                      >
                        <b>No. of Bottles</b>
                        <a
                          class="pull-right"
                        >{{ applicationID.catdLtoApplicationExtention['no_of_bottles'] }}</a>
                      </li>
                      <li
                        class="list-group-item"
                        v-if="application_details.applicationReview.sub_category == 'CAT-D LTO'"
                      >
                        <b>Name of Sponsoring Company</b>
                        <a
                          class="pull-right"
                        >{{ applicationID.catdLtoApplicationExtention['sponsoring_company'] }}</a>
                      </li>

                      <li
                        class="list-group-item"
                        v-if="application_details.applicationReview.sub_category != 'CAT-D LTO'"
                      >
                        <b>Plant type</b>
                        <a class="pull-right">{{ application_details.applicationReview.plant_type }}</a>
                      </li>

                      <li
                        class="list-group-item"
                        v-if="application_details.applicationReview.sub_category == 'LTO' || application_details.applicationReview.sub_category == 'Renewal' || application_details.applicationReview.sub_category == 'ADD-ON LTO'"
                      >
                        <b>Capacity of tank</b>
                        <a
                          class="pull-right"
                        >{{ application_details.applicationReview.capacity_of_tank }}</a>
                      </li>

                      <li class="list-group-item">
                        <b>State</b>
                        <a class="pull-right">{{ application_details.applicationReview.state }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>L.G.A</b>
                        <a class="pull-right">{{ application_details.applicationReview.lga }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Town</b>
                        <a class="pull-right">{{ application_details.applicationReview.town }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Address</b>
                        <a class="pull-right">{{ application_details.applicationReview.address }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Application Date</b>
                        <a class="pull-right">
                          <time-ago :date="application_details.applicationReview.created_at"></time-ago>
                        </a>
                      </li>
                      <li class="list-group-item">
                        <b>Application Status</b>
                        <a
                          class="pull-right text-red"
                        >{{ (application_details.applicationStatus || {}).job_application_status }}</a>
                      </li>

                      <li
                        class="list-group-item"
                        v-if="application_details.issuedAtcLicense && application_details.issuedAtcLicense.implementation_schedule"
                      >
                        <b>Implementation Schedule</b>
                        <a
                          :href="`/displayDocument?pic=/storage/implementation_schedules/${application_details.issuedAtcLicense.company_id}/${ application_details.issuedAtcLicense.application_id }/${ application_details.issuedAtcLicense.implementation_schedule }`"
                          class="pull-right"
                        >
                          <i class="fa fa-eye" style="font-size: 18px;"></i>
                        </a>
                      </li>

                      <div
                        class="box box-primary"
                        v-if="application_details.applicationReview.sub_category == 'LTO' && application_details.activePressureTest"
                      >
                        <div class="box-body box-profile">
                          <h3 class="profile-username text-center">Pressure Test Record</h3>

                          <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                              <b>Date Tested</b>
                              <a class="pull-right">
                                <time-ago
                                  :date="application_details.activePressureTest.date_last_tested"
                                ></time-ago>
                              </a>
                            </li>
                            <li class="list-group-item">
                              <b>Due Date</b>
                              <a class="pull-right">
                                <time-ago :date="application_details.activePressureTest.due_date"></time-ago>
                              </a>
                            </li>
                            <li class="list-group-item">
                              <b>Pressure Test Status</b>
                              <a class="pull-right text-green">Active</a>
                            </li>
                            <li class="list-group-item">
                              <b>Current Active License</b>
                              <a
                                :href="`/displayDocument?pic=/storage/license_docs/${application_details.activePressureTest.company_name}/${application_details.activePressureTest.application_id}/${application_details.activePressureTest.license_url}`"
                                class="pull-right"
                              >
                                <i class="fa fa-eye" style="font-size: 18px;"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="box box-primary">
                  <div class="box-header d-flex justify-content-between">
                    <h3
                      class="box-title"
                      v-if="application_details.applicationReview.sub_category == 'Pressure Testing'"
                    >
                      <b>Application Details</b>
                    </h3>

                    <h3 class="box-title" v-else>
                      <b>REQUIRED DOCUMENTS</b>
                    </h3>
                  </div>
                  <div class="box-body">
                    <li
                      class="list-group-item"
                      v-if="application_details.applicationReview.sub_category == 'Renewal'"
                    >
                      <span
                        style="font-weight: 600; font-size: 16px; margin-left: 5px;"
                      >COPY OF LAST EXPIRED LICENSE</span>
                      <i class="fa fa-check text-green" style="float: left;"></i>
                      <a
                        :href="`/displayDocument?pic=/storage/license_docs/${ application_details.applicationReview.company_id }/${ application_details.thisApplicationRenewalDetails.comp_license_id }/${ application_details.thisApplicationRenewalDetails.copy_of_last_expired_license_location_url }`"
                        class="btn btn-primary btn-xs pull-right"
                      >View</a>
                    </li>
                    <br v-if="application_details.applicationReview.sub_category == 'Renewal'">

                    <view-lto-renewal-application-docs
                      :application_details="application_details"
                      v-if="application_details.applicationReview.sub_category == 'Renewal'"
                    ></view-lto-renewal-application-docs>

                    <view-lto-application-docs
                      :application_details="application_details"
                      v-else-if="application_details.applicationReview.sub_category == 'LTO'"
                    ></view-lto-application-docs>
                    <view-application-docs
                      :application_details="application_details"
                      v-else-if="application_details.applicationReview.sub_category == 'Site Suitability Inspection' || application_details.applicationReview.sub_category == 'ATC'"
                    ></view-application-docs>
                    <view-addon-ati-application-docs
                      :application_details="application_details"
                      v-else-if="application_details.applicationReview.sub_category == 'ADD-ON ATI'"
                    ></view-addon-ati-application-docs>
                    <view-addon-lto-application-docs
                      :application_details="application_details"
                      v-else-if="application_details.applicationReview.sub_category == 'ADD-ON LTO'"
                    ></view-addon-lto-application-docs>
                    <view-catd-lto-application-docs
                      :application_details="application_details"
                      v-else-if="application_details.applicationReview.sub_category == 'CAT-D LTO'"
                    ></view-catd-lto-application-docs>

                    <view-takeover-application-docs
                      :application_details="application_details"
                      v-else-if="application_details.applicationReview.sub_category == 'Take Over'"
                    ></view-takeover-application-docs>

                    <view-pressure-test-application-docs
                      :application_details="application_details"
                      v-else-if="application_details.applicationReview.sub_category == 'Pressure Testing'"
                    ></view-pressure-test-application-docs>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="search" v-else>
        <div class="container">
          <div class="row justify-content-center d-flex">
            <div class="col-sm-6 col-12">
              <form class="search__form" @submit.prevent="findApplication">
                <div class="form-row d-flex align-items-center w-100 flex-column">
                  <transition name="fade" mode="out-in">
                    <div class="input-group mb-3 text-center w-75" v-if="!data_loading">
                      <input
                        type="text"
                        name="application_id"
                        class="form-control"
                        placeholder="Enter Application ID"
                        v-model="application_id"
                        v-validate="'required'"
                        :class="{'is-invalid': errors.has('application_id')}"
                      >
                      <div class="input-group-append">
                        <button
                          class="btn btn-primary mt-5"
                          type="submit"
                          :disabled="data_loading || !application_id"
                        >Search</button>
                      </div>
                    </div>
                    <section-loader v-else class="w-75 mt-3" :contents="'searching...'"></section-loader>
                  </transition>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
  import { getApplicationDetails } from "@js-assets/routes";
  import { sstor } from "@js-assets/utils/stor";
  import SectionLoader from "@js-assets/components/Utilities/AltLoaderComponent";
  import TimeAgo from "@js-assets/components/Utilities/TimeAgo";
  import ViewApplicationDocs from "@js-assets/components/Partials/ViewApplicationDocs";
  import ViewLtoApplicationDocs from "@js-assets/components/Partials/ViewLtoApplicationDocs";
  import ViewCatdLtoApplicationDocs from "@js-assets/components/Partials/ViewCatdLtoApplicationDocs";
  import ViewAddonAtiApplicationDocs from "@js-assets/components/Partials/ViewAddonAtiApplicationDocs";
  import ViewAddonLtoApplicationDocs from "@js-assets/components/Partials/ViewAddonLtoApplicationDocs";
  import ViewLtoRenewalApplicationDocs from "@js-assets/components/Partials/ViewLtoRenewalApplicationDocs";
  import ViewTakeoverApplicationDocs from "@js-assets/components/Partials/ViewTakeoverApplicationDocs";
  import ViewPressureTestApplicationDocs from "@js-assets/components/Partials/ViewPressureTestApplicationDocs";

  export default {
    name: "SearchForApplicationDetails",
    components: {
      SectionLoader,
      TimeAgo,
      ViewApplicationDocs,
      ViewLtoApplicationDocs,
      ViewCatdLtoApplicationDocs,
      ViewAddonAtiApplicationDocs,
      ViewAddonLtoApplicationDocs,
      ViewLtoRenewalApplicationDocs,
      ViewTakeoverApplicationDocs,
      ViewPressureTestApplicationDocs
    },
    data() {
      return {
        application_details: null,
        data_loading: false,
        application_id: null
      };
    },
    created() {},
    methods: {
      checkFields() {
        return this.$validator.validate();
      },
      findApplication() {
        this.checkFields().then(rsp => {
          if (!rsp) {
            return;
          } else {
            this.data_loading = true;

            axios
              .get(getApplicationDetails(this.application_id))
              .then(rsp => {
                if (undefined == rsp) {
                  this.data_loading = false;
                } else {
                  this.application_details = rsp.data.application;
                  this.application_id = null;
                  this.data_loading = false;
                }
              })
              .catch(err => {
                this.data_loading = false;
                this.application_id = null;

                if (err.response.status == 409) {
                  swal(err.response.data.error);
                }
              });
          }
        });
      },
      countSize(val) {
        return _.size(val);
      }
    }
  };
</script>

<style lang="scss" scoped>
  $bg-start: #9d9181;
  $bg-end: #9e866c;
  $card-bg: #e6e5e1;
  $dribbble-color: #ea4b89;
  $twitter-color: #68aade;
  $facebook-color: #3b5999;
  $border-color: #fff;

  .search {
    $self: &;
    margin-top: 15%;
    &__form {
      background: #fff;
      padding: 14% 14% 10% 14%;
      box-shadow: 2px 3px 20px silver;
    }
    /deep/ .fade-enter-active,
    /deep/ .fade-leave-active {
      transition: opacity 600ms;
    }
    /deep/ .fade-enter,
    /deep/ .fade-leave-to {
      opacity: 0;
    }
  }
  .card-profile {
    max-width: 940px;
    width: 98%;
    margin: 50px auto;
    background-color: $card-bg;
    border-radius: 0;
    border: 0;
    box-shadow: 1em 1em 2em rgba(0, 0, 0, 0.2);

    .card-img-top {
      border-radius: 0;
      max-height: 100px;
    }

    .card-img-profile {
      max-width: 100px;
      border-radius: 50%;
      margin-top: -40px;
      margin-bottom: 35px;
      border: 5px solid $card-bg;
    }

    .card-title {
      margin-bottom: 50px;

      small {
        display: block;
        font-size: 0.6em;
        margin-top: 0.2em;
      }
    }

    .card-links {
      margin-bottom: 25px;

      .fa {
        margin: 0 1em;
        font-size: 1.6em;

        &:focus,
        &:hover {
          text-decoration: none;
        }

        &.fa-dribbble {
          color: $dribbble-color;
          font-weight: bold;

          &:hover {
            color: darken($dribbble-color, 10%);
          }
        }

        &.fa-twitter {
          color: $twitter-color;

          &:hover {
            color: darken($twitter-color, 10%);
          }
        }

        &.fa-facebook {
          color: $facebook-color;

          &:hover {
            color: darken($facebook-color, 10%);
          }
        }
      }
    }
  }

  tbody {
    th {
      text-align: right;
      &:nth-of-type(2) {
        text-align: center;
      }
    }
    td {
      text-align: left;
      &:first-of-type {
        text-align: center;
      }
      &[class*="bg-"]:not(.bg-warning) {
        color: #fff;
      }
    }
  }
</style>

<style>
  #pt_style b {
    font-size: 20px;
  }
  #pt_style a {
    font-size: 20px;
    color: red;
  }

  .hider {
    visibility: hidden;
  }
</style>
