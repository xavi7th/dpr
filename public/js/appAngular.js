var app = angular.module('app', ['applicationDocumentReviewUpload']);

var config = {
 headers : {'Content-Type': 'application/json; charset=utf-8'}
};

// ######################
// locationNigerianController
// ######################

app.controller("locationController", function($scope, $http){
  locationNigeria($scope, $http)
});



// ###########################
// appDocReviewController
// ###########################



app.controller("appDocReviewController", function($scope, $http){
  locationNigeria($scope, $http);

  $http.get('js/applicationTypesAndSubCategory.json', config).then((response) => {
    $scope.applicationType = response.data.app_doc;
  },
  (err) => {
    console.log('Error: ' + err);
  });

  $scope.tankCapacityDisplay = false;

  $('#dropdown1').on('change', ()=>{
    var selectedApplicationType = $('#dropdown1').val();

    if(selectedApplicationType == 'LPG/CNG Retailer Outlets' || selectedApplicationType == 'Gas Processing Facilities'
    || selectedApplicationType == 'Select Application Type'){
      $scope.tankCapacityDisplay = false;
    }else{
      $scope.tankCapacityDisplay = true;
    }

    $http.get('js/applicationTypesAndSubCategory.json', config).then((response) => {

      var applicationTypeCount = $scope.applicationType.length;

      for (let i = 0; i < applicationTypeCount; i++) {
        if(response.data.app_doc[i].application_type == selectedApplicationType){
          $scope.sub_category = response.data.app_doc[i].sub_category;
        }
      }

    },
    (err) => {
      console.log('Error: ' + err);
    });

  });

  $('#dropdown1').trigger('change');
});


// ################################
// appDocReviewUploadsController
// ################################

app.controller("appDocReviewUploadsController", function($scope, $http){
  // var checkSVIR_1 = $("#checkSVIR_1").val();
  // var checkSVIR_2 = $("#checkSVIR_2").val();
  // var checkSVIR_3 = $("#checkSVIR_3").val();
  // var checkSVIR_btn = $("#checkSVIR_btn");
  // var checkSVIR_doc = $("#SVIR_doc");
  // var checkSVIR_bad = $("#SVIR_doc_bad");
  // var checkSVIR_good = $("#SVIR_doc_good");
  //
  // var SVIR_doc_status = $("#SVIR #doc_status > i");
  //
  // checkSVIR_doc.attr('disabled' , true);
  //
  // $("#checkSVIR_1").on('click', function(){
  //   SVIR_doc_status.removeClass();
  //   SVIR_doc_status.addClass('ion-android-cancel').css('color','red');
  //   checkSVIR_doc.attr('disabled' , true);
  // });
  //
  // $("#checkSVIR_2").on('click', function(){
  //   SVIR_doc_status.removeClass();
  //   SVIR_doc_status.addClass('ion-checkmark-circled').css('color','#1abc9c');
  //   checkSVIR_doc.attr('disabled' , false);
  //
  // });
  //
  // $("#checkSVIR_3").on('click', function(){
  //   SVIR_doc_status.removeClass();
  //   SVIR_doc_status.addClass('ion-android-remove-circle').css('color','orange');
  //   checkSVIR_doc.attr('disabled' , true);
  // });
  //
  // checkSVIR_btn.on('click', function(){
  //   console.log($("#SVIR_doc").val());
  // });
  //
  // if($("#SVIR_doc").val() != ''){
  //
  // }

});



angular.module('customFileChange', []).directive('fileChange', ['$parse', function($parse) {

    return {
      require: 'ngModel',
      restrict: 'A',
      link: function ($scope, element, attrs, ngModel) {

        // Get the function provided in the file-change attribute.
        // Note the attribute has become an angular expression,
        // which is what we are parsing. The provided handler is
        // wrapped up in an outer function (attrHandler) - we'll
        // call the provided event handler inside the handler()
        // function below.
        var attrHandler = $parse(attrs['fileChange']);

        // This is a wrapper handler which will be attached to the
        // HTML change event.
        var handler = function (e) {


            // Execute the provided handler in the directive's scope.
            // The files variable will be available for consumption
            // by the event handler.
            var reader = new FileReader();

            reader.onload = function (et) {
              $scope.$apply(function () {

                // $scope.details.headerImage = et.target.result;
                ngModel.$setViewValue(et.target.result);
                attrHandler($scope, { $event: e, files: e.target.files, data: et.target.result});
              });
            };

            reader.readAsDataURL(e.target.files[0]);
        };
        $scope.$watch(function () {
            return ngModel.$viewValue;
        }, function (value) {
            if (!value) {
                element.val("");
            }
        });
        // Attach the handler to the HTML change event
        element[0].addEventListener('change', handler, false);
      }
    };
  }]);



  var url=`
  <div>
     <img ng-if="mdl" ng-src="{{mdl}}" class="img-responsive" style="max-width:25%;">
     <input type="file" class="form-control" file-change="uploadImage($event, files)" ng-model="mdl">
  </div>

  `;


  angular.module('customFileUpload', []).directive('customFileUpload', ['$localStorage', 'sendRequest', function ($localStorage, sendRequest) {
    return {
      restrict: 'E',
      scope:{
        dest : '=',
        mdl:'=',
        attr: '=',
        altText: '='
      },
      template: url,
      // templateUrl:'angular/directive-templates/customFileUploadTemplate.php',
      replace: true,
      link: function(scope, element, attributes){

  			// console.log(attributes); //literal string "{{some string}}", no interpolation
  			// console.log(element); //literal string "{{some string}}", no interpolation
  			// console.log(attributes.anotherParam); //literally "another string"
        element.children( 'input[type="file"]' ).attr('id', attributes.attr);
        element.children( 'input[type="file"]' ).attr('name', attributes.attr);
        element.children( 'img' ).attr('alt', attributes.altText);
  			// attributes.$observe('myDirective', function(value){
  			// 	console.log(value);
  			// });
        //
  			// attributes.$observe('anotherParam', function(value){
  			// 	console.log(value);
  			// });

  		},
      controller: ['$scope', function ($scope) {
        $scope.uploadImage = function ($event, files) {
          sendRequest.processImageUpload('/api/upload-image', $scope.mdl , $scope.dest, $localStorage.userToken)
          .then(function (data) {
            console.log(data);
            if (undefined == data.filename) {
              console.error('Server Route Error');
            }
            else{
              $scope.mdl = data.filename;
              $scope.$parent.filename = data.filename;
              // Notification.success({ message: 'Upload Successful', positionX: 'center'});

            }
          });
        };
      }]
    };
  }]);




angular.module('applicationDocumentReviewUpload', []).directive('applicationDocumentReviewUpload', function () {

  var url = `
  <div class="form-group">
          <style>
            .text-white{
              color: #ebebeb;
            }
          </style>

          <label id="req">{{ value }}</label>
          <span id="req_ind">
            <label>
              <input type="radio" name="{{name}}" value="false" class="-red" ng-checked="true" ng-click="doStuffs(null)">
              No
            </label>
            <label>
              <input type="radio" name="{{name}}" value="true" class="-red"" ng-click="doStuffs(true)">
              Yes
            </label>
            <label>
              <input type="radio" name="{{name}}" value="false" class="-red"" ng-click="doStuffs(false)">
              Not Applicable
            </label>
            <label for="{{name}}_doc" class="btn btn-success">Select file</label>
            <input style="display: none;" type="file" id="{{name}}_doc" name="{{name}}_doc" ng-disabled="!grpUpload" ng-change="uploadModelChange()" ng-model="uploadModel">
            <span id="doc" class="uploaded {{ selected == true ? null : 'text-white'}}">
              <i ng-class="{
                'ion-checkmark-circled': grpUpload == true,
                ' text-green' : selected == true && grpUpload == true,
                'ion-android-cancel text-red': grpUpload == null,
                'ion-android-remove-circle text-yellow':grpUpload == false
              }"></i>
           </span>
           <!-- <input type="button" value="View Document"/> -->
          </span>
           <hr>
        </div>

  `;
  
  return {
    restrict: 'E',
    scope:{
      'value' : '=',
      'name' : '='
    },
    template:url,
    replace: true,
    link: function ($scope, el, attrs, ngModel) {
        el.bind('change', function (event) {
          var reader = new FileReader();

          reader.onload = function (e) {

            $scope.$apply(function () {
              console.log('selected');
              $scope.selected = true;
            });
          };

          if (event.target.files) {
            reader.readAsDataURL(event.target.files[0]);
          }
            // $scope.$apply();
        });

        // $scope.$watch(function () {
        //     return ngModel.$viewValue;
        // }, function (value) {
        //     if (!value) {
        //         el.val("");
        //     }
        // });
    },
    controller: ['$scope',  ($scope) => {

      $scope.doStuffs = (val) => {

        if (val == true) {
          $scope.grpUpload = true;
        }
        else if (val == false){
          $scope.grpUpload = false;
        }
        else if (val == null){
          $scope.grpUpload = null;
        }
      };

    }]
  };
});




























// ################################
// App Functions
// ################################

function locationNigeria($scope, $http){


  $http.get('js/location.json', config).then((response) => {
    $scope.states = response.data.nigeria;
  },
  (err) => {
    console.log('Error: ' + err);
  });

  $('#dropdown2').on('change', ()=>{
    var selectedState = $('#dropdown2').val();

    $http.get('js/location.json', config).then((response) => {

      var stateCount = $scope.states.length;

      for (let i = 0; i < stateCount; i++) {
        if(response.data.nigeria[i].state == selectedState){
          $scope.lga = response.data.nigeria[i].lga;
        }
      }

    },
    (err) => {
      console.log('Error: ' + err);
    });

  });

  $('#dropdown2').trigger('change');
}
