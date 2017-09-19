'use strict';

// signup controller
app.controller('SignupFormController', ['$scope', '$http', '$state', function($scope, $http, $state) {
    $scope.user = {};
    $scope.authError = null;
    $scope.signup = function() {
        var data = {};
        data[$scope.user.tokenKey] = $scope.user.tokenVal;
        data['name']= $scope.user.name;
        data['email']= $scope.user.email;
        data['password']= $scope.user.password;
        data = $.param(data);
        $scope.authError = null;
        // Try to create
        $http({
            method : 'POST',
            url : 'adminAccount/signup',
            data : data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
        })
        .then(function(result) {
        if ( !result.data["result"] == 'success' ) {
            $scope.authError = result;
        }else{
            $state.go('app.dashboard-v1');
        }
        }, function(x) {
            $scope.authError = 'Server Error';
        });
    };
  }]);
