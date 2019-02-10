<template lang="html">
  <div>
    <div class="form-group">
      <label>ATC Application ID</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
        <input type="text" name="atc_application_id" class="form-control" placeholder="Enter ATC Application ID">
      </div>
    </div>
    <!-- <div class="form-group">
      <label>Name of Company</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
        <input type="text" name="company_name" class="form-control" placeholder="Enter Name of Company">
      </div>
    </div> -->
    <div class="form-group">
      <label>Name of Equipment</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
        <input type="text" name="equipment_name" class="form-control" placeholder="Enter Name of Equipment">
      </div>
    </div>
    <input type="text" name="application_type" value="LPG Retailer Outlets" hidden>
    <input type="text" name="sub_category" value="Pressure Testing" hidden>
    <div class="form-group">
      <label>Type of Test</label>
      <select class="form-control select2" name="test_type" style="width: 100%;">
        <option selected="selected">Select Type</option>
        <option value="Hydro Testing">Hydro Testing</option>
        <option value="UTM">UTM</option>
      </select>
    </div>
    <div class="form-group" id="capacity_of_tank">
      <label>Tag Number</label>
      <div class="input-group">
          <span class="input-group-addon"><i class="ion-beaker"></i></span>
          <input type="text" name="tag_number" class="form-control" placeholder="Enter Tag Number">
      </div>
    </div>

    <!-- <div class="row">
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
      <label>Location</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="ion ion-location"></i></span>
        <input type="text" name="location" class="form-control" placeholder="Enter Location">
      </div>
    </div> -->

    <div class="row">
      <div class="col-xs-6">
        <div class="form-group">
          <label>Year of Manufacture</label>
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input type="text" name="manufacture_year" class="form-control" placeholder="Enter Year of Manufacture">
          </div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="form-group">
          <label>Year of Commission</label>
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input type="text" name="commission_year" class="form-control" placeholder="Enter Year of Commission">
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <div class="form-group">
          <label>Design Pressure (BAR)</label>
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input type="text" name="design_pressure" class="form-control" placeholder="Enter Design Pressure">
          </div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="form-group">
          <label>Test Pressure (BAR)</label>
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input type="text" name="test_pressure" class="form-control" placeholder="Enter Test Pressure">
          </div>
        </div>
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
            if(this.sub_category == 'Select Sub-Category' || this.sub_category == 'Site Suitability Inspection' || this.sub_category == 'LPG-ATC'){
              this.typeValid = false;
            }else{
              this.typeValid = true;
            }
          }

        },
        computed(){

        }
    }

</script>
