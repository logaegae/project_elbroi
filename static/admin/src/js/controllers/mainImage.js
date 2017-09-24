'use strict';

// signin controller
app.controller('MainImageController', ['$scope', '$http', function($scope, $http) {
    $scope.list = {};
    $scope.state = null;
    $scope.orderChanged = false;

    $scope.sortableOptions = {
		containment: '#sortable-wrapper',
	    orderChanged: function (event) {
	    	$scope.orderChanged = true;
	    }
	};

    $scope.$on('uploaded', function(e, m){
      if(m){
        $scope.getList();
      }
    })

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

    $scope.saveOrder = function(){
        console.log($scope.list);
    }

    $scope.deleteItem = function(e){
        console.log("id : " + e)
    }

  }]);
