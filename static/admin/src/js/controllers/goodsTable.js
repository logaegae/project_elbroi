app.controller('GoodsTableCtrl', ['$scope', '$http', function($scope, $http) {

    $scope.list = {};
    $scope.state = null;

    var token = window.token;

    $scope.getList = function(){

        var data = $.param(token);
        $scope.state = null;
        $http({
            method : 'POST',
            url : 'listApi/getGoodsList',
            data : data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
        })
        .then(function(result) {

            result.data['list'].forEach(function(e,i){
                result.data['list'][i]['registrationTimestamp'] = new Date(e['registrationDate']).getTime();
                !e['lastChanged'] ? result.data['list'][i]['lastChangedTimestamp'] = new Date(e['lastChanged']).getTime() : 'null';
            });
            $scope.list = result.data['list'];

        }, function(x) {
            console.log(x);
            $scope.state = '서버 에러';
        });
    };

}]);
