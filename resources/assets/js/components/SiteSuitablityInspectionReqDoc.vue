<template lang="html">
  <div class="form-group">
    <input type="text" :name="title" hidden :value="title">
    <label id="req">{{title}}</label>
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
      <label :for="inputid" class="btn btn-success" :class="{'disabled' : fileInputStatus}">Select file</label>
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
      console.log("Component hmm.");
    },
    props: ["title", "name", "inputid"],
    data() {
      return {
        optionSelected: "no",
        docIcon: "ion-android-cancel text-red",
        fileInputStatus: true,
        fileValue: null,
        fileColor: "#ccc"
      };
    },
    methods: {
      previewFile(event) {
        console.log(event.target.files[0].name);
        this.fileValue = event.target.files[0].name;
        this.fileColor = "green";
        this.$root.submitDisabled = false;
      }
    },
    updated() {
      if (this.optionSelected == "no") {
        this.docIcon = "ion-android-cancel text-red";
        this.fileInputStatus = true;
        this.fileValue = null;
        this.fileColor = "#ccc";
        this.$root.submitDisabled = true;
      } else if (this.optionSelected == "yes") {
        this.docIcon = "ion-checkmark-circled";
        this.fileInputStatus = false;

        if (!this.fileValue) {
          this.$root.submitDisabled = true;
        }
      } else if (this.optionSelected == "null") {
        this.docIcon = "ion-android-remove-circle text-yellow";
        this.fileInputStatus = true;
        this.fileValue = null;
        this.fileColor = "#ccc";
        this.$root.submitDisabled = true;
      }
    }
  };
</script>

<style>
  #doc_icon {
    color: #ccc;
  }

  label.btn-success:not(.disabled) {
    background-color: #00a65a !important;
    border-color: #008d4c !important;
  }

  label.disabled {
    cursor: not-allowed;
  }
</style>
