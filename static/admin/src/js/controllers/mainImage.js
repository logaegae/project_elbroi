'use strict';

// signin controller
app.controller('MainImageController', ['$scope', '$http', function($scope, $http) {
    $scope.list = {};
    $scope.state = null;
    var data = window.token;
    data = $.param(data);


    $scope.$on('uploaded', function(event, args) {
        $scope.state = args.message;
    });

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
