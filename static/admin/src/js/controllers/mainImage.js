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

    var token = window.token;

    $scope.getList = function(){

        var data = $.param(token);
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
            console.log(x);
            $scope.state = '서버 에러';
        });
    };

    $scope.saveOrder = function(){
        console.log($scope.list);
    }

    $scope.deleteItem = function(index){

        var data = token;
        data['id'] = index['id'];
        data['uploadedFileId'] = index['uploadedFileId'];
        data = $.param(data);
        console.log(data);

        $scope.authError = null;

        if(confirm("삭제할까요?")){
            $http({
                method : 'POST',
                url : 'api/deleteMainItem',
                data : data,
                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
            })
            .then(function(result) {
              $scope.getList();
              $scope.state = "삭제되었습니다."
            }, function(x) {
                console.log(x);
                $scope.state = '서버 에러';
            });
        }

    }

  }]);
