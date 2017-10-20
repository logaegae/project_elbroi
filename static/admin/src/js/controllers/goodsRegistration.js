'use strict';

/* Controllers */

  // Form controller
app.controller('GoodsRegistrationCtrl', ['$scope', '$http', function($scope, $http) {

    $scope.data = {
        code : null,
        name : null,
        delYn : 'N',
        price : null,
        stock : null,
        detail : null
    };
    $scope.state = null;

    var token = window.token;

    $scope.submitData = function(){

        var data = token;
        data['good'] = $scope.data;
        
        data.good['detail'] = document.getElementById('detail').innerHTML;
        $scope.data = $.param(data);

        $http({
            method : 'POST',
            url : 'api/saveGood',
            data : data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
        })
        .then(function(result) {

            $scope.state = result.data['message'];

        }, function(x) {
            console.log(x);
            $scope.state = '서버 에러';
        });
    }

}]);
