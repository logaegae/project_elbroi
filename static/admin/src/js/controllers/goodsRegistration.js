'use strict';

/* Controllers */

  // Form controller
app.controller('GoodsRegistrationCtrl', ['$scope', '$http', function($scope, $http) {

    $scope.data = {
        datacode : "test",
        name : null,
        price : null,
        stock : null,
        file: null
    };
    $scope.state = null;

    var token = window.token;

    $scope.attachedFile = function(element) {
        $scope.$apply(function($scope) {
            $scope.data.file = element.files[0];
        });
       console.log('file attached');
   };

    $scope.submitData = function(){

        var formData = new FormData();

        for(var e in token){
            console.log(e)
            formData.append(e, token[e]);
        }

        for(var e in $scope.data){
            formData.append(e, $scope.data[e]);
        }

        formData.append("detail", document.getElementById('detail').innerHTML);

        $http.post('api/saveGood', formData, {
           transformRequest: angular.identity,
           headers: {'Content-Type': undefined}
        })
        .then(function(result) {
            console.log(result);
            $scope.state = result.data['message'];

        }, function(x) {
            console.log(x);
            $scope.state = '서버 에러';
        });
    }

}]);
