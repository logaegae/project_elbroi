'use strict';

angular.module('ui.auth', [])
    .service('uiAuth', ['$q', '$http', '$state', '$rootScope', function($q, $http, $state, $rootScope) {

        var API = '/adminAccount/auth';
        var deferred = $q.defer();

        // 로그인 정보 조회
        this.isAuthenticate = function() {

            $rootScope.auth = null;
            $rootScope.adminEmail = null;

            // 인증정보가 없으면 백엔드에 호출함
            $http.get(API)
            .success(function(result) {

                $rootScope.auth = result['auth']; // 인증정보 저장
                $rootScope.adminEmail = result['adminEmail'];
                deferred.resolve(cache.get('auth'));

                if(!result['auth']){

                    //미로그인
                    deferred.reject('Rejected');
                    $state.go('access.signin');

                }

            })
            .error(function() {

                deferred.reject('Rejected');
                $state.go('access.signin');

            });

        }
    }]);
