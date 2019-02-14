<template lang="html">
  <div class="form-group">
    <div class="modal modal-danger fade" :id="`${name}`">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Specify a reason why <b><i>{{title}}</i></b> is not available</h4>
          </div>
          <div class="modal-body" style="padding: 5px;">
            <textarea :name="reason" rows="8" cols="80" style="width: 100%; resize: none; height: 200px; color: #000; padding: 5px;" placeholder="Give reason..."></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline" data-dismiss="modal">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <input type="text" :name="title" hidden :value="title">
    <label id="req">{{title}}</label><i v-show="showReasonBtn" id="reason-btn" class="fa fa-edit text-red" data-toggle="modal" :data-target="`#${name}`"></i>
    <span id="req_ind">
      <label>
        <input type="radio" :name="name" value="no" checked v-model="optionSelected">
        No
      </label>
      <label>
        <input type="radio" :name="name" value="yes" v-model="optionSelected">
        Yes
      </label>
      <label>
        <input type="radio" :name="name" value="null" v-model="optionSelected">
        Not Applicable
      </label>
      <label :for="inputid" class="btn btn-success">Select file</label>
      <input style="display: none;" type="file" :id="inputid" :name="inputid" :disabled="fileInputStatus" @change="previewFile">
      <span id="doc_icon">
        <i v-bind:style="{color: fileColor}" v-bind:class="docIcon"></i>
     </span>
     <!-- <input type="button" value="View Document"/> -->
    </span>
     <hr>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component hmm.');
        },
        props:['title','name','inputid','reason'],
        data(){
          return{
            optionSelected: 'no',
            docIcon: 'ion-android-cancel text-red',
            fileInputStatus: true,
            showReasonBtn: true,
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
            this.showReasonBtn = true;
          }else if (this.optionSelected == 'yes') {
            this.docIcon = 'ion-checkmark-circled';
            this.fileInputStatus = false;
            this.showReasonBtn = false;
          }else if (this.optionSelected == 'null') {
            this.docIcon = 'ion-android-remove-circle text-yellow';
            this.fileInputStatus = true;
            this.fileValue = null;
            this.fileColor = '#ccc';
            this.showReasonBtn = true;
          }

        }
    }
</script>

<style>
  #doc_icon{
    color: #ccc;
  }

  #req{
    margin-right: 10px;
  }

  #reason-btn{
    cursor: pointer;
  }
</style>
