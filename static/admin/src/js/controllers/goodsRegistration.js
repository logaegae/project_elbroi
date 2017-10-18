'use strict';

/* Controllers */

  // Form controller
app.controller('GoodsRegistrationCtrl', ['$scope', '$http', function($scope, $http) {

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

    $scope.saveOrder = function(){

        var data = token;
        data['list'] = [];
        $scope.list.forEach(function(e,i){
            data['list'].push({
                id : e.id,
                priority : i + 1
            });
        });
        data = $.param(data);

        $http({
            method : 'POST',
            url : 'api/saveOrder',
            data : data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
        })
        .then(function(result) {

            $scope.getList();
            $scope.orderChanged = false;
            $scope.state = result.data['message'];

        }, function(x) {
            console.log(x);
            $scope.state = '서버 에러';
        });
    }

    $scope.deleteItem = function(index){

        var data = token;
        data['id'] = index['id'];
        data['uploadedFileId'] = index['uploadedFileId'];
        data = $.param(data);

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
