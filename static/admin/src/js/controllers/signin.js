'use strict';

// signin controller
app.controller('SigninFormController', ['$scope', '$http', '$state', function($scope, $http, $state) {
    $scope.user = {};
    $scope.authError = null;

    $scope.login = function() {
        $scope.authError = null;
      // Try to login
        var data = {};
        data['email'] = $scope.user.email;
        data['password'] = $scope.user.password;
        data[$scope.user.tokenKey] = $scope.user.tokenVal;
        data = $.param(data);
        $http({
            method : 'POST',
            url : 'api/signin',
            data : data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
        })
        .then(function(result) {
            console.log(result)
        if ( !result.data["result"] == 'success' ) {
            $scope.authError = 'ID 혹은 비밀번호를 확인해주세요';
        }else{
            console.log("success");
            // $rootscope.user = {logged_in : true}
            // $state.go('app.dashboard-v1');
        }
        }, function(x) {
            $scope.authError = 'Server Error';
        });
    };
  }])
;
