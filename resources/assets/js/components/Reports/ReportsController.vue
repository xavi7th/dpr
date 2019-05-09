<template>
  <component
    :is="currentTabComponent"
    @change-component="changeComponent($event)"
    :propsData="propsData"
  ></component>
</template>

<script>
  import ReportsDashboard from "@reports-components/ReportsDashboard.vue";
  import LPGPenetrationReport from "@reports-components/LPGPenetrationReport.vue";
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
      "lpg-penetration-report": LPGPenetrationReport
    },
    methods: {
      changeComponent(evt) {
        this.currentTabComponent = evt.component;
        this.propsData = evt.payload;
        console.log(evt);
      }
    }
  };
</script>

<style lang="scss" scoped>
</style>
