<template lang="html">
  <div>
    <div class="form-group">
      <label>Name of Gas Plant</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
        <input type="text" name="gas_plant_name" class="form-control" placeholder="Enter Name of Gas Plant">
      </div>
    </div>
    <div class="form-group">
      <label>Application Type</label>
      <select id="dropdown1" class="form-control" v-on:change="onChangeOne()" v-model="application_type" name="application_type" style="width: 100%;">
        <option selected="selected">Select Application Type</option>
        <option v-for="item in application_types" :value="item.application_type">{{item.application_type}}</option>
      </select>
    </div>
    <div class="form-group">
      <label>Sub-Category</label>
      <select class="form-control" name="sub_category" v-on:change="type_valid()" v-model="sub_category" style="width: 100%;">
        <option selected="selected">Select Sub-Category</option>
        <option v-for="item in sub_categories" :value="item">{{item}}</option>
      </select>
    </div>
    <div class="form-group">
      <label>Plant Type</label>
      <select class="form-control select2" name="plant_type" style="width: 100%;">
        <option selected="selected">Select Type</option>
        <option value="Refilling Plant">Refilling Plant</option>
        <option value="Industrial Plant">Industrial Plant</option>
        <option value="Auto Gas Plant">Auto Gas Plant</option>
      </select>
    </div>
    <div class="form-group" id="capacity_of_tank" v-show="typeValid">
      <label>Capacity of Tank (MT)</label>
      <div class="input-group">
          <span class="input-group-addon"><i class="ion-beaker"></i></span>
          <input type="text" name="capacity_of_tank" class="form-control" placeholder="Enter Capacity of tank">
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <div class="form-group">
          <label>State</label>
          <select id="dropdown2" v-on:change="onChangeTwo()" v-model="state" class="form-control" name="state" style="width: 100%;">
            <option selected="selected">Select State</option>
            <option v-for="item in states" :value="item.state">{{item.state}}</option>
          </select>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="form-group">
          <label>L.G.A</label>
          <select id="dropdown3" class="form-control" name="lga" style="width: 100%;">
            <option selected="selected">Select LGA</option>
            <option v-for="item in lga" :value="item">{{item}}</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label>Town</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="ion ion-location"></i></span>
        <input type="text" name="town" class="form-control" placeholder="Enter Town">
      </div>
    </div>
    <div class="form-group">
      <label>Address</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="ion ion-location"></i></span>
        <input type="text" name="address" class="form-control" placeholder="Enter Address">
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            // console.log('Component hmm.');
            axios.get('js/location.json').then(response => {
              this.states = response.data.nigeria;
            });
            axios.get('js/applicationTypesAndSubCategory.json').then(response => {
              this.application_types = response.data.app_doc;
            });

        },
        data(){
          return{
            application_types: [],
            sub_categories: [],
            states: [],
            lga: [],
            state: 'Select State',
            application_type: 'Select Application Type',
            sub_category: 'Select Sub-Category',
            typeValid: false
          }
        },
        methods:{
          onChangeOne(){
            this.sub_categories = [];
            axios.get('js/applicationTypesAndSubCategory.json').then(response => {
              var appTypeCount = this.application_types.length;
              for (let i = 0; i < appTypeCount; i++) {
                if(this.application_types[i].application_type == this.application_type){

                  for (var j = 0; j < response.data.app_doc[i].sub_category.length; j++) {
                    this.sub_categories.push(response.data.app_doc[i].sub_category[j]);
                  }
                }
              }
            });
          },
          onChangeTwo(){
            this.lga = [];
            axios.get('js/location.json').then(response => {
              var stateCount = this.states.length;
              for (let i = 0; i < stateCount; i++) {
                if(this.states[i].state == this.state){
                  for (var j = 0; j < response.data.nigeria[i].lga.length; j++) {
                    this.lga.push(response.data.nigeria[i].lga[j]);
                  }
                }
              }
            });
          },
          type_valid(){
            if(this.sub_category == 'Select Sub-Category' || this.sub_category == 'Site Suitability Inspection' || this.sub_category == 'ATC'){
              this.typeValid = false;
            }else{
              this.typeValid = true;
            }
          }

        },

    }

</script>
