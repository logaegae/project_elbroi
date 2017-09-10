angular.module('ui.auth', [])
    .service('AuthService', function($q, $http, $state, $cacheFactory) {

        var API = 'api/auth',
            cache = $cacheFactory('auth');

        // 로그인 정보 조회
        function isAuthenticated() {

            var deferred = $q.defer();

            if (cache.get('auth')) {

                // 캐쉬에 인증정보가 있으면 인증정보 반환
                deferred.resolve(cache.get('auth'));

            } else {

                // 캐쉬에 인증정보가 없으면 백엔드에 호출함
                $http.get(API)
                .success(function(result) {
                    cache.put('auth', result.data['auth']); // 캐쉬에 인증정보 저장
                    deferred.resolve(cache.get('auth')); // 인증정보 반환
                })
                .error(function() {
                    // 인증되지 않을경우 reject
                    deferred.reject('rejected');

                    if (options && options.redirect) {
                        $state.go('access.signin');
                    }

                });

            }

            this.get = get;

        }
    });
