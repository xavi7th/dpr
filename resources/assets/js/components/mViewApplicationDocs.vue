<template lang="html">
  <li id="label-shift">
    <!-- todo text -->
    <span class="text">{{ title }}</span>
    <!-- Emphasis label -->
    <small :class="[
    'label',
    {'label-success' : nameval == 'yes'},
    {'label-danger' : nameval == 'no'},
    {'label-warning' : nameval == 'null'}
    ]">{{ namevalModified }}</small>
    <!-- General tools such as edit or delete-->
    <div v-show="!reasonBtn" class="tools" data-toggle="modal" :data-target="`#${modality}`">
      <i class="fa fa-eye"></i>
    </div>
    <div v-show="reasonBtn" class="tools" data-toggle="modal" :data-target="`#${modality}`">
      <i class="fa fa-edit text-edit"></i>
    </div>
    <!-- <i v-show="reasonBtn" id="reason-btn" class="fa fa-edit text-red" data-toggle="modal" :data-target="`#${modality}`"></i> -->
    <div class="modal fade" :id="`${modality}`" style="display: none;">
      <div class="modal-dialog" style="width: 1400px;">
        <div class="modal-content" style="background: transparent;">
          <img :src="picURL" alt="">
        </div>
      </div>
    </div>
  </li>

</template>

<script>
    export default {
        mounted() {
          if(this.imgurl != 'null'){
            this.picURL = '/storage/comp_docs/'+this.marketerid+'/'+this.applicationid+'/'+this.imgurl+'';
          }else{
            this.picURL = '';
          }

          if(this.nameval == 'null'){
            this.namevalModified = 'Not Applicable';
          }else{
            this.namevalModified = this.nameval
          }

          if(this.nameval == 'no' || this.nameval == 'null'){
            this.reasonBtn = true;
          }
        },
        props:['applicationid','marketerid','imgurl','title','nameval','modality'],
        data(){
          return{
            docsData: [],
            namevalModified: this.nameval,
            picURL: '',
            reasonBtn: false
          }
        }
    }
</script>

<style>
  #label-shift{
    margin-bottom: 10px;
  }
  #label-shift span{
    font-size: 16px;
    text-transform: uppercase;
  }
  #label-shift small{
    margin-left: 30px;
    font-size: 12px;
  }
</style>
