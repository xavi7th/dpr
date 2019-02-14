<template lang="html">
  <div>
    <!-- <div class="form-group">
      <label>Company ID</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
        <input type="text" name="company_id" class="form-control" placeholder="Enter Company ID">
      </div>
    </div> -->
    <!-- <div class="form-group">
      <label>Name of Gas Plant</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
        <input type="text" name="gas_plant_name" class="form-control" placeholder="Enter Name of Gas Plant">
      </div>
    </div> -->
    <input type="text" name="application_type" value="CAT-D" hidden>
    <input type="text" name="sub_category" value="CAT-D LTO" hidden>
    <!-- <div class="form-group">
      <label>Plant Type</label>
      <select class="form-control select2" name="plant_type" style="width: 100%;">
        <option selected="selected">Select Type</option>
        <option value="Refilling Plant">Refilling Plant</option>
        <option value="Industrial Plant">Industrial Plant</option>
        <option value="Auto Gas Plant">Auto Gas Plant</option>
      </select>
    </div> -->
    <div class="form-group" id="capacity_of_tank">
      <label>Name of Sponsoring Company</label>
      <div class="input-group">
          <span class="input-group-addon"><i class="ion-beaker"></i></span>
          <input type="text" name="name_of_sponsoring_company" class="form-control" placeholder="Sponsoring Company">
      </div>
    </div>
    <div class="form-group" id="capacity_of_tank">
      <label>No. of Bottles</label>
      <div class="input-group">
          <span class="input-group-addon"><i class="ion-beaker"></i></span>
          <input type="text" name="no_of_bottles" class="form-control" placeholder="Enter No. of Bottles">
      </div>
    </div>
    <div class="form-group" id="capacity_of_tank">
      <label>Capacity (KG)</label>
      <div class="input-group">
          <span class="input-group-addon"><i class="ion-beaker"></i></span>
          <input type="text" name="capacity_of_tank" class="form-control" placeholder="Enter Capacity of tank">
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
      </div> -->
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
