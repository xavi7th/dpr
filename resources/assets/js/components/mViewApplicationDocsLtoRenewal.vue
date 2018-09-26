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
    <div class="tools" data-toggle="modal" :data-target="`#${modality}`">
      <i class="fa fa-eye"></i>
    </div>
    <!-- <div v-show="reasonBtn" class="tools" data-toggle="modal" :data-target="`#${reason}`" v-on:click="getReason()">
      <i class="fa fa-edit text-edit"></i>
    </div> -->
    <!-- <i v-show="reasonBtn" id="reason-btn" class="fa fa-edit text-red" data-toggle="modal" :data-target="`#${modality}`"></i> -->
    <div class="modal fade" :id="`${modality}`" style="display: none;">
      <div class="modal-dialog" style="width: 1400px;">
        <div class="modal-content" style="background: transparent;">
          <img :src="picURL" alt="">
        </div>
      </div>
    </div>
    <!-- <div v-show="reasonBtn" class="modal modal-danger fade" :id="`${reason}`">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{specifiedReason}}</h4>
          </div>
          <div class="modal-body" style="padding: 5px;">
            <textarea name="reason" rows="8" cols="80" style="width: 100%; resize: none; height: 200px; color: #000; padding: 5px;" placeholder="Give reason...">{{reasonspecified}}</textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline" data-dismiss="modal">Submit</button>
          </div>
        </div>
      </div>
    </div> -->
  </li>

</template>

<script>
    export default {
        mounted() {

          if(this.imgurl != 'null'){
            this.picURL = '/storage/license_docs/'+this.marketerid+'/'+this.applicationid+'/'+this.imgurl+'';
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
        props:['applicationid','marketerid','imgurl','title','nameval','modality','reason','reasonspecified'],
        data(){
          return{
            docsData: [],
            namevalModified: this.nameval,
            picURL: ''
          }
        },
        methods:{
          
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
