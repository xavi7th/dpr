<template>
  <li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <i class="fa fa-bell-o"></i>
      <span class="label label-danger">{{ new_notifications_count }}</span>
    </a>
    <ul class="dropdown-menu">
      <li class="header">You have {{ new_notifications_count }} new notifications</li>
      <li>
        <!-- inner menu: contains the actual data -->
        <ul class="menu">
          <li v-for="(n, idx) in new_notifications" :key="idx">
            <a href="#">
              <h4 class="ml-1">
                {{ n.sender_name }}
                <small>
                  <i class="fa fa-clock-o"></i>
                  {{ n.created_at }}
                </small>
              </h4>
              <p class="ml-1">{{ n.notification }}</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="footer">
        <a class="view-all" @click="currentComponent = 'ViewAllNotifications'">See All Notifications</a>
      </li>
    </ul>
    <transition name="nav-transition" mode="out-in">
      <component :is="currentComponent" id="notifications-container">
        <template slot="close-button">
          <i class="fa fa-times close-button" @click="currentComponent = null"></i>
        </template>
      </component>
    </transition>
  </li>
</template>

<script>
  /**
   * Using webpack code splitting to load the notification components only if requested
   */
  import { GetNewNotifications } from "../routes";
  // import ViewAllNotifications from "./Nav/ViewAllNotifications";
  export default {
    name: "UserNotifications",
    components: {
      // ViewAllNotifications,
      ViewAllNotifications: resolve =>
        require(["./Nav/ViewAllNotifications"], resolve) //import("./Nav/ViewAllNotifications.vue")
    },

    data() {
      return {
        new_notifications: {},
        currentComponent: null
      };
    },
    created() {
      axios
        .get(GetNewNotifications)
        .then(rsp => {
          this.new_notifications = rsp.data.data;
        })
        .catch(err => {
          if (err.response) {
            swal("Server Error", `${err.response.data}`, "error");
          } else if (err.request) {
            swal("Request Error", `${err.request}`, "error");
          } else {
            swal("Requset Error", `${err.message}`, "error");
          }
        });
    },
    computed: {
      new_notifications_count() {
        return _.size(this.new_notifications);
      }
    }
  };
</script>

<style scoped>
  .view-all {
    cursor: pointer;
  }
  #notifications-container {
    top: 50px;
    left: 230px;
    right: 0;
    bottom: 0;
    position: fixed;
    background-color: rgb(0, 0, 0, 0.5);
    padding: 0 15px;
  }
  .close-button {
    font-size: 32px;
    display: block;
    text-align: right;
    margin-bottom: 35px;
    padding-right: 3%;
    padding-top: 1%;
    font-weight: 100;
    color: #fff;
    text-shadow: -1px 1px 1px black;
    cursor: pointer;
  }
</style>
