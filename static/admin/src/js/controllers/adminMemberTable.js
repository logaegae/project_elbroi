app.controller('AdminMemberTableCtrl', ['$scope', '$http', function($scope, $http) {

    $scope.list = {};
    $scope.state = null;

    var token = window.token;

    $scope.getList = function(){

        var data = $.param(token);
        $scope.state = null;
        $http({
            method : 'POST',
            url : 'listApi/getAdminList',
            data : data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
        })
        .then(function(result) {

            result.data['list'].forEach(function(e,i){
                result.data['list'][i]['registrationTimestamp'] = new Date(e['registationDate']).getTime();

            });
            $scope.list = result.data['list'];

        }, function(x) {
            console.log(x);
            $scope.state = '서버 에러';
        });
    };

    $scope.signupCheck = function(_id,_val){

        var data = token;
        data['item'] = {
            id : _id,
            authorizationYn : _val
        };
        data['model'] = 'adminMember';
        data = $.param(data);

        $http({
            method : 'POST',
            url : 'listApi/signupOk',
            data : data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
        })
        .then(function(result) {
            $scope.getList();
            $scope.state = result.data['message'];

        }, function(x) {
            console.log(x);
            $scope.state = '서버 에러';
        });
    }

}]);
