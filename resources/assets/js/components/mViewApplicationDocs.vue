<template lang="html">
  <li id="label-shift">
    <!-- todo text -->
    <i :class="[
    {'fa fa-check text-green' : nameval == 'yes'},
    {'fa fa-times text-red' : nameval == 'no'},
    {'ion-checkmark-circled text-yellow' : (nameval == 'null' || nameval == '') }
    ]"></i>
    <span class="text">{{ title }}</span>
    <!-- Emphasis label -->
    <!-- <small :class="[
    'label',
    {'label-success' : nameval == 'yes'},
    {'label-danger' : nameval == 'no'},
    {'label-warning' : nameval == 'null'}
    ] ">{{ namevalModified }}</small> -->

    <!-- General tools such as edit or delete-->
    <!-- <form v-on:click="viewDocument()">
      <input type="text" hidden value="nokia" name="phone">
      <input type="text" hidden value="google" name="company">
      <button type="submit" class="btn btn-xs btn-primary pull-right">View</button>
    </form> -->
    <!-- <button type="submit" class="btn btn-primary btn-xs pull-right" v-on:click="viewDocument()">View</button> -->
    <a :href="`/displayDocument?pic=${picURL}`" class="btn btn-primary btn-xs pull-right">View</a>


    <input v-if="role != 'Marketer'" id="checkform" type="checkbox" name="documentCheck" v-on:change="markValid()" v-model="documentcheck_value">

    <!-- <input id="checkform" type="checkbox" name="documentCheck" v-on:change="markValid()" v-model="valid" :checked="`${valid}`"> -->
    <!-- <div v-show="!reasonBtn" class="tools" data-toggle="modal" :data-target="`#${modality}`">
      <i class="fa fa-eye"></i>
    </div>
    <div v-show="reasonBtn" class="tools" data-toggle="modal" :data-target="`#${reason}`" v-on:click="getReason()">
      <i class="fa fa-edit text-edit"></i>
    </div> -->
    <!-- <i v-show="reasonBtn" id="reason-btn" class="fa fa-edit text-red" data-toggle="modal" :data-target="`#${modality}`"></i> -->
    <!-- <div v-show="!reasonBtn" class="modal fade" :id="`${modality}`" style="display: none;">
      <div class="modal-dialog" style="width: 1400px;">
        <div class="modal-content" style="background: transparent;">
          <img :src="picURL" alt="">
        </div>
      </div>
    </div>
    <div v-show="reasonBtn" class="modal modal-danger fade" :id="`${reason}`">
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
      if (this.imgurl != "null") {
        this.picURL =
          "/storage/comp_docs/" +
          this.marketerid +
          "/" +
          this.applicationid +
          "/" +
          this.imgurl +
          "";
      } else {
        this.picURL = "";
      }

      if (this.nameval == "null") {
        this.namevalModified = "Not Applicable";
      } else {
        this.namevalModified = this.nameval;
      }

      if (this.nameval == "no" || this.nameval == "null") {
        this.reasonBtn = true;
      }

      if (this.documentcheck == "true") {
        this.documentcheck_value = true;
      } else if (this.documentcheck == "false") {
        this.documentcheck_value = false;
      }
    },
    props: [
      "applicationid",
      "marketerid",
      "imgurl",
      "title",
      "nameval",
      "modality",
      "reason",
      "reasonspecified",
      "documentcheck",
      "subcategory",
      "documentcheckname",
      "role"
    ],
    data() {
      return {
        docsData: [],
        namevalModified: this.nameval,
        picURL: this.imgurl,
        docReason: this.reasonspecified,
        reasonBtn: false,
        specifiedReason: "",
        documentcheck_value: this.documentcheck
        // role: this.role
      };
    },
    methods: {
      getReason() {
        // axios.get('/getReson',{params: {data:''}}).then(response => { {img:this.picURL, reason:this.docReason}
        //   this.states = response.data.nigeria;
        // });
        this.specifiedReason = this.title;
      },
      viewDocument() {
        axios
          .post("/viewDocument", { img: this.picURL, reason: this.docReason })
          .then(response => {
            window.location.href = "/displayDocument";
            console.log("successful");

            // this.states = response.data.nigeria;
          });
      },
      markValid() {
        console.log(this.documentcheck_value);
        axios
          .post("/document_valid", {
            applicationid: this.applicationid,
            subcategory: this.subcategory,
            valid: this.documentcheck_value + "",
            documentcheck: this.documentcheckname
          })
          .then(response => {
            console.log("successful");
          });
      }
    }
  };
</script>

<style>
  #label-shift {
    margin-bottom: 10px;
  }
  #label-shift span {
    font-size: 16px;
    text-transform: uppercase;
  }
  #label-shift small {
    margin-left: 30px;
    font-size: 12px;
  }
  #checkform {
    float: right;
    margin-right: 20px;
  }
</style>
