<template>
  <div>
    <slot name="close-button"></slot>
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">All Notifications ({{ all_notifications_count }})</h3>
          </div>

          <div class="box-body">
            <ul class="products-list product-list-in-box">
              <li class="item" v-for="n in all_notifications" :key="n.id">
                <div class="product-info">
                  <a
                    href="javascript:void(0)"
                    @click="$emit('view-notif', n)"
                    class="product-title"
                  >
                    {{ n.sender_name }}
                    <span
                      class="label label-danger pull-right"
                      @click="deleteNotification(n)"
                    >Delete</span>
                    <span
                      class="label label-warning pull-right"
                      @click="markAsRead(n)"
                      v-if="!n.is_read"
                    >Mark as Read</span>
                  </a>
                  <span class="product-description">{{ n.notification }}.</span>
                </div>
              </li>
            </ul>
          </div>

          <div class="box-footer text-center"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  /**
   * Using webpack code splitting to load the notification components only if requested
   */
  import {
    GetAllNotifications,
    DeleteNotification,
    MarkNotificationRead
  } from "../../routes";
  export default {
    name: "UserNotifications",
    data() {
      return {
        all_notifications: {},
        currentComponent: null
      };
    },
    created() {
      axios
        .get(GetAllNotifications)
        .then(rsp => {
          this.all_notifications = rsp.data.data;
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
    },
    computed: {
      all_notifications_count() {
        return _.size(this.all_notifications);
      }
    },
    methods: {
      deleteNotification(notif) {
        axios
          .get(DeleteNotification(notif.id))
          .then(rsp => {
            swal("Deleted", ``, "info");
            var removed = this.all_notifications.indexOf(notif);
            this.all_notifications.splice(removed, 1);
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
      },
      markAsRead(notif) {
        axios
          .get(MarkNotificationRead(notif.id))
          .then(rsp => {
            // swal("Done", ``, "success");
            notif.is_read = true;
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
  .box {
    max-height: 72vh;
    overflow: scroll;
  }

  .product-info {
    margin: 0 30px;
  }

  .label {
    margin-right: 10px;
  }
</style>
