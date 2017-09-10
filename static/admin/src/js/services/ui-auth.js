'use strict';

angular.module('ui.auth', [])
    .service('uiAuth', ['$q', '$http', '$state', '$rootScope', function($q, $http, $state, $rootScope) {

        var API = '/api/auth';

        // 로그인 정보 조회
        this.isAuthenticate = function() {

            var deferred = $q.defer();

            if ($rootScope.auth !== undefined && $rootScope.auth === true) {

                // 캐쉬에 인증정보가 있으면 인증정보 반환
                deferred.resolve($rootScope.auth);

            } else if($rootScope.auth !== undefined && $rootScope.auth === false) {

                // 미로그인
                $state.go('access.signin');

            } else {

                // 인증정보가 없으면 백엔드에 호출함
                $http.get(API)
                .success(function(result) {
                    console.log(API);
                    $rootScope.auth = result['auth']; // 인증정보 저장
                    console.log($rootScope.auth);
                    deferred.resolve($rootScope.auth); // 인증정보 반환
                })
                .error(function() {

                    deferred.reject($rootScope.auth);
                    return false;

                });
            }

            return deferred.promise;

        }
    }]);
