<template>
  <div id="app">
    <GChart
      :settings="{ packages: ['table'] }"
      type="Table"
      :data="chartData"
      :options="chartOptions"
      :events="chartEvents"
      ref="gChart"
    />
  </div>
</template>

<script>
  import { GChart } from "vue-google-charts";
  export default {
    name: "App4",
    components: {
      GChart
    },
    data() {
      return {
        // Array will be automatically processed with visualization.arrayToDataTable function
        chartData: [
          [
            { type: "string", label: "President", id: "President" },
            { type: "date", label: "From", id: "From" },
            { type: "date", label: "To", id: "To" }
          ],
          ["Washington", new Date(1789, 3, 30), new Date(1797, 3, 4)],
          ["Adams", new Date(1797, 2, 4), new Date(1802, 2, 4)],
          ["Jefferson", new Date(1801, 2, 4), new Date(1809, 2, 4)]
        ],
        chartOptions: {
          chart: {
            title: "Company Performance",
            subtitle: "Sales, Expenses, and Profit: 2014-2017"
          }
        },
        chartEvents: {
          select: () => {
            const table = this.$refs.gChart.chartObject;
            const selection = table.getSelection();
            const onSelectionMeaasge =
              selection.length !== 0 ? "row was selected" : "row was diselected";
            alert(onSelectionMeaasge);
          }
        }
      };
    }
  };
</script>
