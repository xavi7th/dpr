<template>
  <component
    :is="currentTabComponent"
    @change-component="changeComponent($event)"
    @view-reports-dashboard="changeComponent()"
    :propsData="propsData"
  ></component>
</template>

<script>
  import ReportsDashboard from "@reports-components/ReportsDashboard.vue";
  import LPGPenetrationReport from "@reports-components/LPGPenetrationReport.vue";
  import SearchApplication from "@reports-components/SearchApplication.vue";
  export default {
    name: "ReportsController",
    data() {
      return {
        currentTabComponent: "reports-dashboard",
        propsData: null
      };
    },
    components: {
      ReportsDashboard,
      "lpg-penetration-report": LPGPenetrationReport,
      SearchApplication
    },
    methods: {
      changeComponent(evt = null) {
        if (null == evt) {
          this.currentTabComponent = "reports-dashboard";
        } else {
          this.currentTabComponent = evt.component;
          this.propsData = evt.payload;
          console.log(evt);
        }
      }
    }
  };
</script>

<style lang="scss" scoped>
</style>
