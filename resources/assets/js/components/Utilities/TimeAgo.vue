<template>
  <span v-if="date" class="vue-moments-ago">{{ prefix }} {{ ago }}</span>
</template>

<script>
  import Vue from "vue";
  import moment from "moment";
  Vue.prototype.moment = moment;

  export default {
    data() {
      return {
        ago: "",
        relativeTime: ""
      };
    },
    props: {
      prefix: {
        type: String,
        default: "" //eg posted to get posted X months ago
      },
      date: {
        type: String,
        required: true
      },
      lang: {
        type: String,
        default: "en"
      }
    },

    mounted() {
      setInterval(() => {
        this.getAgo();
      }, 1000);
    },

    created() {
      this.getAgo();
    },

    methods: {
      getAgo() {
        this.ago = moment(this.date)
          .locale(this.lang)
          .fromNow();
      }
    }
  };
</script>

<style scoped>
  .vue-ago {
    font-size: 12px;
  }
</style>
