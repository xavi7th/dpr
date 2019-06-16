<template>
  <transition name="fade">
    <div class="content-wrapper" v-if="!viewDashboard">
      <section class="content-header">
        <h1>
          Welcome
          <small>{{ user_name }}</small>
        </h1>
      </section>

      <section class="content">
        <div class="row choices">
          <!-- <div class="col-md-3 col-sm-6 col-xs-12"> -->
          <a href @click.prevent="newApplication">
            <div class="info-box">
              <span class="info-box-icon bg-aqua">
                <i class="glyphicon glyphicon-import"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Create a new application</span>
                <span class="info-box-number">New Application</span>
              </div>
            </div>
          </a>
          <!-- </div> -->

          <!-- <div class="col-md-3 col-sm-6 col-xs-12"> -->
          <a href="/marketer_app_doc_review">
            <div class="info-box">
              <span class="info-box-icon bg-green">
                <i class="glyphicon glyphicon-export"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Continue your existing application</span>
                <span class="info-box-number">Existing Application</span>
              </div>
            </div>
          </a>
          <!-- </div> -->

          <!-- <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow">
                <i class="fa fa-files-o"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Uploads</span>
                <span class="info-box-number">13,648</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red">
                <i class="fa fa-star-o"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">93,139</span>
              </div>
            </div>
          </div>-->
        </div>
      </section>
      <!-- /.content -->
    </div>

    <div class="content-wrapper" v-else>
      <section class="content-header">
        <h1>
          Dashboard
          <small>Marketer Control panel</small>
        </h1>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="lpg inner"></div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">
                LPG/CNG Retailer
                Outlet
              </h3>
              <a
                href="/lpg_retailer_outlet"
                style="padding: 6px; text-align: left; color: #fff;"
                class="small-box-footer"
              >
                Proceed to application request
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!--  <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="cng inner">
                <p>Records</p>
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">CNG Retailer Outlet</h3>
              <a href="/lpg_retailer_outlet" style="padding: 6px; text-align: left; color: #fff;" class="small-box-footer">Proceed to application request <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>-->
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gpf inner"></div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">
                Gas Processing
                Facilities
              </h3>
              <a
                href="/gas_processing_facilities_dashboard"
                style="padding: 6px; text-align: left; color: #fff;"
                class="small-box-footer"
              >
                Proceed to
                application request
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gpli inner"></div>
              <h3
                style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;"
              >Gas Pipelines</h3>
              <a
                href="/gas_pipelines_dashboard"
                style="padding: 6px; text-align: left; color: #fff;"
                class="small-box-footer"
              >
                Proceed to application request
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="prmo inner"></div>
              <h3
                style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;"
              >Project Monitoring</h3>
              <a
                href="/project_monitoring_dashboard"
                style="padding: 6px; text-align: left; color: #fff;"
                class="small-box-footer"
              >
                Proceed to application request
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gpu inner"></div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">
                Gas Production /
                Utilization
              </h3>
              <a
                href="/lpg_retailer_outlet"
                style="padding: 6px; text-align: left; color: #fff;"
                class="small-box-footer"
              >
                Proceed to application request
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gpeo inner"></div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">
                Gas Production /
                Export Operations
              </h3>
              <a
                href="/lpg_retailer_outlet"
                style="padding: 6px; text-align: left; color: #fff;"
                class="small-box-footer"
              >
                Proceed to application request
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gsso inner"></div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">
                Gas Sub-surface
                Operation
              </h3>
              <a
                href="/lpg_retailer_outlet"
                style="padding: 6px; text-align: left; color: #fff;"
                class="small-box-footer"
              >
                Proceed to application request
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gasdia inner"></div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">Gas Diary</h3>
              <a
                href="/lpg_retailer_outlet"
                style="padding: 6px; text-align: left; color: #fff;"
                class="small-box-footer"
              >
                Proceed to application request
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </transition>
</template>

<script>
  export default {
    name: "MarketerDashboard",
    props: ["user_name"],
    data() {
      return {
        viewDashboard: false
      };
    },
    methods: {
      newApplication() {
        swal
          .fire({
            title: "Have you created a company?",
            text:
              "Every application requires a company. Have you already created the company for this new application?",
            type: "question",
            footer: "<a href='#'>Why do I have to create a company?</a>",
            showCancelButton: true,
            confirmButtonText:
              "<i class='fa fa-thumbs-up'></i> Yes, create aplication",
            cancelButtonText: "No, create company",
            cancelButtonColor: "#d33",
            reverseButtons: true
          })
          .then(result => {
            if (result.value) {
              // this.viewDashboard = true;
              location.assign("/lpg_retailer_outlet");
            } else if (result.dismiss === swal.DismissReason.cancel) {
              location.assign("/create_company?continue=application");
            }
          });
      }
    }
  };
</script>

<style lang="scss" scoped>
  .choices {
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: space-around;

    @media (max-width: 767px) {
      flex-direction: column;

      .info-box-text {
        font-size: 12px;
      }

      .info-box-number {
        font-size: 14px;
      }
    }

    > a:hover {
      color: #000;

      .glyphicon {
        text-shadow: 1px 1px 2px #000;
      }
    }
  }

  .info-box {
    display: flex;
    // flex-direction: column;
    align-items: center;
    justify-content: center;
    & &-content {
      margin-left: 0;
      text-align: center;
    }
  }
</style>
