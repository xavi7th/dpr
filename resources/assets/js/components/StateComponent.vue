<template lang="html">
  <div class="row">
    <div class="col-xs-6">
      <div class="form-group">
        <label>State</label>
        <select id="dropdown2" v-on:change="onChange()" v-model="state" class="form-control" name="state" style="width: 100%;">
          <option selected="selected" :value="null">Select State</option>
          <option v-for="item in states" :value="item.state">{{item.state}}</option>
        </select>
      </div>
    </div>
    <div class="col-xs-6">
      <div class="form-group">
        <label>L.G.A</label>
        <select id="dropdown3" class="form-control" name="lga" style="width: 100%;">
          <option selected="selected" :value="null">Select LGA</option>
          <option v-for="item in lga" :value="item">{{item}}</option>
        </select>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log("Component hmm.");
      axios.get("/js/location.json").then(response => {
        this.states = response.data.nigeria;
      });
    },
    data() {
      return {
        states: [],
        lga: [],
        state: null
      };
    },
    methods: {
      onChange() {
        console.log(this.state);
        axios.get("/js/location.json").then(response => {
          var stateCount = this.states.length;
          for (let i = 0; i < stateCount; i++) {
            if (this.states[i].state == this.state) {
              this.lga = [];
              for (var j = 0; j < response.data.nigeria[i].lga.length; j++) {
                this.lga.push(response.data.nigeria[i].lga[j]);
              }
            }
          }
          console.log(this.lga);
        });
      }
    }
  };
</script>
