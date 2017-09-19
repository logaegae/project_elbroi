'use strict';

// signin controller
app.controller('MainImageController', ['$scope', '$http', function($scope, $http) {
    $scope.list = {};
    $scope.state = null;
    $scope.getList = function()
    {
        $scope.authError = null;
        var data = window.token;
        data[$scope.user.tokenKey] = $scope.user.tokenVal;
        data = $.param(data);

        $http({
            method : 'POST',
            url : 'adminAccount/getMainList',
            data : data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
        })
        .then(function(result) {
          console.log(result);
        }, function(x) {
            $scope.state = 'Server Error';
        });
    };
    getList();
  }])
;
