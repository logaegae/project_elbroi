'use strict';

// signin controller
app.controller('MainImageController', ['$scope', '$http', 'SiteMainUploadCheck', function($scope, $http, SiteMainUploadCheck) {
    $scope.list = {};
    $scope.state = null;
    $scope.check = SiteMainUploadCheck;

    if($scope.check['uploaded']){
        console.log('uploaded');
        $scope.check['uploaded'] = false;
    }

    var data = window.token;
    data = $.param(data);

    $scope.getList = function(){
        $scope.authError = null;
        $http({
            method : 'POST',
            url : 'api/getMainList',
            data : data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
        })
        .then(function(result) {
          $scope.list = result.data['list'];
          console.log($scope.list);
        }, function(x) {
            $scope.state = 'Server Error';
        });
    };

  }]);
