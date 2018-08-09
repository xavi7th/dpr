//This directive saves the selected file details on the passed variables AND then aves the base64 version of the image on the model.
// <input type="file" class="form-control" file-change="yourHandler($event, files)" ng-model="details.test3"/>
//
// $scope.yourHandler = function ($event, files) {
//   console.log($event);
//   console.log(files);
//   // console.log(data);
//   console.log($scope.details.test3);
// };

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
