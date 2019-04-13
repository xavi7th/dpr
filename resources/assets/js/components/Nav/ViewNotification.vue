<template>
  <div>
    <slot name="close-button"></slot>

    <div class="row d-flex justify-content-center mt-5">
      <div class="col-md-6">
        <!-- Box Comment -->
        <div class="box box-widget">
          <div class="box-header with-border">
            <div class="user-block">
              <span class="username">
                <a>{{ propsData.sender_name }}</a>
              </span>
              <span class="description">Shared publicly - {{ propsData.created_at }}</span>
            </div>
          </div>

          <div class="box-body">
            <p>{{ propsData.notification }}</p>
          </div>
          <div class="box-footer">
            <form method="post" @submit.prevent="replyNotification">
              <!-- .img-push is used to add margin to elements next to floating images -->
              <div class="img-push">
                <textarea
                  type="text"
                  class="form-control input-sm"
                  :placeholder="`Send notification to ${propsData.sender_name}`"
                  v-model="notif_msg"
                ></textarea>
              </div>
              <div class="box-footer px-0 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import { sendNotification } from "../../routes";
  export default {
    name: "ViewANotification",
    props: ["propsData"],
    data() {
      return {
        notif_msg: null
      };
    },
    methods: {
      replyNotification() {
        if (this.notif_msg == null) {
          swal("Empty notification", ``, "warning");
          return;
        }
        axios
          .post(sendNotification, {
            recipient_id: this.propsData.sender_id,
            msg: this.notif_msg
          })
          .then(rsp => {
            console.log(rsp);
            if (rsp.status == 201) {
              swal(
                "Sent",
                "Notitification sent to " + this.propsData.sender_name,
                "success"
              );
              this.notif_msg = null;
            }
          })
          .catch(err => {
            console.log(err.response);
            if (err.response) {
              swal("Server Error", `${err.response.message}`, "error");
            } else if (err.request) {
              swal("Request Error", `${err.request}`, "error");
            } else {
              swal("Requset Error", `${err.message}`, "error");
            }
          });
      }
    }
  };
</script>

<style scoped>
</style>
