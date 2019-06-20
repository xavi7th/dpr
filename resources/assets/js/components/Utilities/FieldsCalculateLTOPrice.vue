<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group" id="capacity_of_tank">
          <label>Capacity of Tank (MT)</label>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="ion-beaker"></i>
            </span>
            <input
              type="number"
              name="capacity_of_tank"
              class="form-control"
              placeholder="Enter Capacity of tank"
              v-model="capacity_of_tank"
            >
            <span class="input-group-addon">MT</span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group" id="amount">
          <label>Bank Draft Amount</label>
          <div class="input-group" :class="{'error': errors.has('bank_draft_amount')}">
            <span class="input-group-addon">
              <i class="ion-beaker"></i>
            </span>
            <input
              type="text"
              name="bank_draft_amount"
              class="form-control"
              :placeholder="`Minimum:  ${ltoPrice}`"
              v-validate="`required|min_value:${ltoPrice}`"
              v-model="bank_draft_amount"
              :disabled="!capacity_of_tank"
              @keyup="validatePrice"
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "CalculateLTOPrice",
    props: ["submitDisabled"],
    data() {
      return {
        capacity_of_tank: null,
        bank_draft_amount: null
      };
    },
    created() {
      // this.$emit("update:submitDisabled", false);
    },
    methods: {
      validatePrice() {
        this.$validator.validate().then(result => {
          if (result) {
            this.$emit("update:submitDisabled", false);
          }
        });
      }
    },
    computed: {
      ltoPrice() {
        if (this.capacity_of_tank <= 100) {
          return 20000;
        } else {
          return (
            Math.ceil((Number(this.capacity_of_tank) - 100) / 10) * 2000 + 20000
          );
        }
      }
    }
  };
</script>

<style lang="scss" scoped>
  .error {
    border: 1px solid red;
  }
</style>
