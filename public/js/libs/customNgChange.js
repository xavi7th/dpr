//This directive sets the selected file as base64 on the model
// <!-- <input type="file" data-bind-file="" data-ng-model="theFile" /> -->


home.directive('bindFile', [function () {
    return {
        require: "ngModel",
        restrict: 'A',
        link: function ($scope, el, attrs, ngModel) {
            el.bind('change', function (event) {
              var reader = new FileReader();

              reader.onload = function (e) {

                $scope.$apply(function () {
                  // $scope.details.headerImage = e.target.result;
                  ngModel.$setViewValue(e.target.result);
                });
              };

              reader.readAsDataURL(event.target.files[0]);
                // $scope.$apply();
            });

            $scope.$watch(function () {
                return ngModel.$viewValue;
            }, function (value) {
                if (!value) {
                    el.val("");
                }
            });
        }
    };
}]);
