<template lang="html">
  <div class="form-group">
    <input type="text" :name="title" hidden :value="title">
    <div class="tools" data-toggle="modal" :data-target="`#${modality}`" style="display: inline; padding-right: 15px; cursor: pointer;">
      <i class="fa fa-eye"></i>
    </div>
    <label id="req" style="font-size: 16px;">{{title}}</label>
    <small class="label label-danger" style="margin-left: 30px; font-size: 12px;">yes</small>
    <span id="req_ind">
      <label :for="inputid" class="btn btn-success">Select file</label>
      <input style="display: none;" type="file" :id="inputid" :name="inputid">

      <input type="button" value="Upload Document" class="btn btn-success">
    </span>

    <div class="modal fade" :id="`${modality}`" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <img :src="picURL" alt="">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component hmm.');
        },
        props:['title','name','inputid'],
        data(){
          return{
            optionSelected: 'no',
            docIcon: 'ion-android-cancel text-red',
            fileInputStatus: true,
            fileValue: null,
            fileColor: '#ccc'
          }
        },
        methods:{
          previewFile(event){
            console.log(event.target.files[0].name);
            this.fileValue = event.target.files[0].name;
            this.fileColor = 'green';
          }
        },
        updated(){
          if(this.optionSelected == 'no'){
            this.docIcon = 'ion-android-cancel text-red';
            this.fileInputStatus = true;
            this.fileValue = null;
            this.fileColor = '#ccc';
          }else if (this.optionSelected == 'yes') {
            this.docIcon = 'ion-checkmark-circled';
            this.fileInputStatus = false;
          }else if (this.optionSelected == 'null') {
            this.docIcon = 'ion-android-remove-circle text-yellow';
            this.fileInputStatus = true;
            this.fileValue = null;
            this.fileColor = '#ccc';
          }

        }
    }
</script>

<style>
  #doc_icon{
    color: #ccc;
  }
</style>
