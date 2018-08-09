// EXAMPLE uploadPostImage
// <custom-file-upload dest="'u32/'" mdl="post.postImage" attr="postImage" altText="Post Image Upload"></custom-file-upload>

// The mdl attribute is the model to use for the element and the attr is the name and the id to use. the dest folder is the folder to upload the image to in our storage directory
// We use jQLite to set the id and the name attribute in the link method and we set the model and the destination folder in the controller

// The attr attribute is used to set the name and the id attributes of the generated filefield from the template userdetails
// The altText attr is used to set the alt attribut of the nested image used for displaying the uploaded image

// // NOTE:

// This directive requires the file change directive to be loaded. We use the file change directive to respond to when the user selects an image and then trigger the upload
// This directive also requires the sendRequest directives
// The directive passes the filename of the aved imnage on the server back to the model instance that was passed in



// EXAMPLE templateUrl
// <div>
//   <img ng-if="mdl" ng-src="{{mdl}}" class="img-responsive" style="max-width:25%;">
//   <input type="file" class="form-control" file-change="uploadImage($event, files)" ng-model="mdl">
// </div>

// EXAMPLE LARAVEL CONTROLLER TO HANDLE THE ROUTYE
// public function handleImageUpload(){
//
//     // dump(request()->all());
//
//     $data = request('image');
//     $foldername = request('fn');
//
//     list($type, $data) = explode(';', $data);
//     list(, $data)      = explode(',', $data);
//
//     $data = base64_decode($data);
//     $imageName = time().'.png';
//     $hey = Storage::disk('public')->put($foldername.$imageName, $data);
//
//     return ['filename' => '/storage/'.$foldername.$imageName];
//
// }

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
