<template>
  <div>
    <button
      type="button"
      class="btn btn-block bg-maroon-gradient"
      @click="showModal = true"
    >Resubmit Application</button>
    <transition name="fade">
      <div class="row d-flex justify-content-center notification-bkg" v-if="showModal">
        <div class="col-md-6">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Notification</h3>
            </div>

            <div class="box-body">
              <form role="form">
                <!-- textarea -->
                <div class="form-group">
                  <textarea
                    class="form-control"
                    rows="3"
                    placeholder="Send the staff a notification of your updates"
                    v-model="notif_msg"
                  ></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer">
              <button class="btn btn-default" @click="showModal = false">Cancel</button>
              <button class="btn btn-primary pull-right" @click="sendNotification">Confirm</button>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
  import { ResubmitApplication } from "@js-assets/routes";
  export default {
    name: "BtnBackToMarketer",
    props: ["applicationId"],
    data() {
      return {
        showModal: false,
        notif_msg: null
      };
    },
    methods: {
      sendNotification() {
        if (!this.notif_msg) {
          swal.fire("", "Empty Notification", "warning");
          return;
        }

        axios
          .post(ResubmitApplication(this.applicationId), {
            msg: this.notif_msg
          })
          .then(rsp => {
            if (rsp.status == 201) {
              this.notif_msg = null;
              swal
                .fire("Sent", "Notitification sent to staff", "success")
                .then(rsp => {
                  location.reload();
                });
            }
          });
      }
    }
  };
</script>

<style scoped>
  .notification-bkg {
    position: fixed;
    top: 50px;
    left: 230px;
    background-color: rgba(0, 0, 0, 0.8);
    right: 0;
    bottom: 0;
    padding: 5%;
    z-index: 5;
  }

  @media (max-width: 767px) {
    .notification-bkg {
      left: 0;
      top: 0;
      padding-top: 150px;
    }
  }
</style>
