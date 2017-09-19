'use strict';

/**
 * Config for the router
 */
angular.module('app')
    .run(
        ['$rootScope', '$state', '$stateParams', '$q',
            function($rootScope, $state, $stateParams, $q) {
                $rootScope.$state = $state;
                $rootScope.$stateParams = $stateParams;
            }
        ]
    )
    .config(
        ['$stateProvider', '$urlRouterProvider', 'JQ_CONFIG', 'MODULE_CONFIG',
            function($stateProvider, $urlRouterProvider, JQ_CONFIG, MODULE_CONFIG) {
                var layout = "/admin/html/app.html";
                if (window.location.href.indexOf("material") > 0) {
                    layout = "/admin/html/blocks/material.layout.html";
                    $urlRouterProvider
                        .otherwise('/app/dashboard-v3');
                } else {
                    $urlRouterProvider
                        .otherwise('/app/dashboard-v1');
                }

                $stateProvider
                    .state('app', {
                        abstract: true,
                        url: '/app',
                        templateUrl: layout
                    })
                    .state('app.dashboard-v1', {
                        url: '/dashboard-v1',
                        templateUrl: '/admin/html/app_dashboard_v1.html',
                        resolve: {
                            deps : load(['/static/admin/src/js/controllers/chart.js']),
                            auth : isAuthenticate()
                        }
                    })
                    .state('app.dashboard-v2', {
                        url: '/dashboard-v2',
                        templateUrl: '/admin/html/app_dashboard_v2.html',
                        resolve: load(['/static/admin/src/js/controllers/chart.js'])
                    })
                    .state('app.dashboard-v3', {
                        url: '/dashboard-v3',
                        templateUrl: '/admin/html/app_dashboard_v3.html',
                        resolve: load(['/static/admin/src/js/controllers/chart.js'])
                    })
                    .state('app.site', {
                        url: '/site',
                        template: '<div ui-view class="fade-in-up"></div>'
                    })
                    .state('app.site.mainImage', {
                        url: '/mainImage',
                        templateUrl: '/admin/html/siteImage_main.html',
                        resolve: load(['/static/admin/src/js/controllers/mainImage.js', '/static/admin/src/js/controllers/file-upload.js'])
                    })
                    .state('app.ui', {
                        url: '/ui',
                        template: '<div ui-view class="fade-in-up"></div>'
                    })
                    .state('app.ui.buttons', {
                        url: '/buttons',
                        templateUrl: '/admin/html/ui_buttons.html'
                    })
                    .state('app.ui.icons', {
                        url: '/icons',
                        templateUrl: '/admin/html/ui_icons.html'
                    })
                    .state('app.ui.grid', {
                        url: '/grid',
                        templateUrl: '/admin/html/ui_grid.html'
                    })
                    .state('app.ui.widgets', {
                        url: '/widgets',
                        templateUrl: '/admin/html/ui_widgets.html'
                    })
                    .state('app.ui.bootstrap', {
                        url: '/bootstrap',
                        templateUrl: '/admin/html/ui_bootstrap.html'
                    })
                    .state('app.ui.sortable', {
                        url: '/sortable',
                        templateUrl: '/admin/html/ui_sortable.html'
                    })

                    .state('app.ui.scroll', {
                        url: '/scroll',
                        templateUrl: '/admin/html/ui_scroll.html',
                        resolve: load('/static/admin/src/js/controllers/scroll.js')
                    })
                    .state('app.ui.portlet', {
                        url: '/portlet',
                        templateUrl: '/admin/html/ui_portlet.html'
                    })
                    .state('app.ui.timeline', {
                        url: '/timeline',
                        templateUrl: '/admin/html/ui_timeline.html'
                    })
                    .state('app.ui.tree', {
                        url: '/tree',
                        templateUrl: '/admin/html/ui_tree.html',
                        resolve: load(['angularBootstrapNavTree', '/static/admin/src/js/controllers/tree.js'])
                    })
                    .state('app.ui.toaster', {
                        url: '/toaster',
                        templateUrl: '/admin/html/ui_toaster.html',
                        resolve: load(['toaster', '/static/admin/src/js/controllers/toaster.js'])
                    })
                    .state('app.ui.jvectormap', {
                        url: '/jvectormap',
                        templateUrl: '/admin/html/ui_jvectormap.html',
                        resolve: load('/static/admin/src/js/controllers/vectormap.js')
                    })
                    .state('app.ui.googlemap', {
                        url: '/googlemap',
                        templateUrl: '/admin/html/ui_googlemap.html',
                        resolve: load(['/static/admin/src/js/app/map/load-google-maps.js', '/static/admin/src/js/app/map/ui-map.js', '/static/admin/src/js/app/map/map.js'], function() {
                            return loadGoogleMaps();
                        })
                    })
                    .state('app.chart', {
                        url: '/chart',
                        templateUrl: '/admin/html/ui_chart.html',
                        resolve: load('/static/admin/src/js/controllers/chart.js')
                    })
                    // table
                    .state('app.table', {
                        url: '/table',
                        template: '<div ui-view></div>'
                    })
                    .state('app.table.static', {
                        url: '/static',
                        templateUrl: '/admin/html/table_static.html'
                    })
                    .state('app.table.datatable', {
                        url: '/datatable',
                        templateUrl: '/admin/html/table_datatable.html'
                    })
                    .state('app.table.footable', {
                        url: '/footable',
                        templateUrl: '/admin/html/table_footable.html'
                    })
                    .state('app.table.grid', {
                        url: '/grid',
                        templateUrl: '/admin/html/table_grid.html',
                        resolve: load(['ngGrid', '/static/admin/src/js/controllers/grid.js'])
                    })
                    .state('app.table.uigrid', {
                        url: '/uigrid',
                        templateUrl: '/admin/html/table_uigrid.html',
                        resolve: load(['ui.grid', '/static/admin/src/js/controllers/uigrid.js'])
                    })
                    .state('app.table.editable', {
                        url: '/editable',
                        templateUrl: '/admin/html/table_editable.html',
                        controller: 'XeditableCtrl',
                        resolve: load(['xeditable', '/static/admin/src/js/controllers/xeditable.js'])
                    })
                    .state('app.table.smart', {
                        url: '/smart',
                        templateUrl: '/admin/html/table_smart.html',
                        resolve: load(['smart-table', '/static/admin/src/js/controllers/table.js'])
                    })
                    // form
                    .state('app.form', {
                        url: '/form',
                        template: '<div ui-view class="fade-in"></div>',
                        resolve: load('/static/admin/src/js/controllers/form.js')
                    })
                    .state('app.form.components', {
                        url: '/components',
                        templateUrl: '/admin/html/form_components.html',
                        resolve: load(['ngBootstrap', 'daterangepicker', '/static/admin/src/js/controllers/form.components.js'])
                    })
                    .state('app.form.elements', {
                        url: '/elements',
                        templateUrl: '/admin/html/form_elements.html'
                    })
                    .state('app.form.validation', {
                        url: '/validation',
                        templateUrl: '/admin/html/form_validation.html'
                    })
                    .state('app.form.wizard', {
                        url: '/wizard',
                        templateUrl: '/admin/html/form_wizard.html'
                    })
                    .state('app.form.fileupload', {
                        url: '/fileupload',
                        templateUrl: '/admin/html/form_fileupload.html',
                        resolve: load(['angularFileUpload', '/static/admin/src/js/controllers/file-upload.js'])
                    })
                    .state('app.form.imagecrop', {
                        url: '/imagecrop',
                        templateUrl: '/admin/html/form_imagecrop.html',
                        resolve: load(['ngImgCrop', '/static/admin/src/js/controllers/imgcrop.js'])
                    })
                    .state('app.form.select', {
                        url: '/select',
                        templateUrl: '/admin/html/form_select.html',
                        controller: 'SelectCtrl',
                        resolve: load(['ui.select', '/static/admin/src/js/controllers/select.js'])
                    })
                    .state('app.form.slider', {
                        url: '/slider',
                        templateUrl: '/admin/html/form_slider.html',
                        controller: 'SliderCtrl',
                        resolve: load(['vr.directives.slider', '/static/admin/src/js/controllers/slider.js'])
                    })
                    .state('app.form.editor', {
                        url: '/editor',
                        templateUrl: '/admin/html/form_editor.html',
                        controller: 'EditorCtrl',
                        resolve: load(['textAngular', '/static/admin/src/js/controllers/editor.js'])
                    })
                    .state('app.form.xeditable', {
                        url: '/xeditable',
                        templateUrl: '/admin/html/form_xeditable.html',
                        controller: 'XeditableCtrl',
                        resolve: load(['xeditable', '/static/admin/src/js/controllers/xeditable.js'])
                    })
                    // pages
                    .state('app.page', {
                        url: '/page',
                        template: '<div ui-view class="fade-in-down"></div>'
                    })
                    .state('app.page.profile', {
                        url: '/profile',
                        templateUrl: '/admin/html/page_profile.html'
                    })
                    .state('app.page.post', {
                        url: '/post',
                        templateUrl: '/admin/html/page_post.html'
                    })
                    .state('app.page.search', {
                        url: '/search',
                        templateUrl: '/admin/html/page_search.html'
                    })
                    .state('app.page.invoice', {
                        url: '/invoice',
                        templateUrl: '/admin/html/page_invoice.html'
                    })
                    .state('app.page.price', {
                        url: '/price',
                        templateUrl: '/admin/html/page_price.html'
                    })
                    .state('app.docs', {
                        url: '/docs',
                        templateUrl: '/admin/html/docs.html'
                    })
                    // others
                    .state('lockme', {
                        url: '/lockme',
                        templateUrl: '/admin/html/page_lockme.html'
                    })
                    .state('access', {
                        url: '/access',
                        template: '<div ui-view class="fade-in-right-big smooth"></div>'
                    })
                    .state('access.signin', {
                        url: '/signin',
                        templateUrl: '/admin/html/page_signin.html',
                        resolve: load(['/static/admin/src/js/controllers/signin.js'])
                    })
                    .state('access.signup', {
                        url: '/signup',
                        templateUrl: '/admin/html/page_signup.html',
                        resolve: load(['/static/admin/src/js/controllers/signup.js'])
                    })
                    .state('access.forgotpwd', {
                        url: '/forgotpwd',
                        templateUrl: '/admin/html/page_forgotpwd.html'
                    })
                    .state('access.404', {
                        url: '/404',
                        templateUrl: '/admin/html/page_404.html'
                    })

                    // fullCalendar
                    .state('app.calendar', {
                        url: '/calendar',
                        templateUrl: '/admin/html/app_calendar.html',
                        // use resolve to load other dependences
                        resolve: load(['moment', 'fullcalendar', 'ui.calendar', '/static/admin/src/js/app/calendar/calendar.js'])
                    })

                    // mail
                    .state('app.mail', {
                        abstract: true,
                        url: '/mail',
                        templateUrl: '/admin/html/mail.html',
                        // use resolve to load other dependences
                        resolve: load(['/static/admin/src/js/app/mail/mail.js', '/static/admin/src/js/app/mail/mail-service.js', 'moment'])
                    })
                    .state('app.mail.list', {
                        url: '/inbox/{fold}',
                        templateUrl: '/admin/html/mail.list.html'
                    })
                    .state('app.mail.detail', {
                        url: '/{mailId:[0-9]{1,4}}',
                        templateUrl: '/admin/html/mail.detail.html'
                    })
                    .state('app.mail.compose', {
                        url: '/compose',
                        templateUrl: '/admin/html/mail.new.html'
                    })

                    .state('layout', {
                        abstract: true,
                        url: '/layout',
                        templateUrl: '/admin/html/layout.html'
                    })
                    .state('layout.fullwidth', {
                        url: '/fullwidth',
                        views: {
                            '': {
                                templateUrl: '/admin/html/layout_fullwidth.html'
                            },
                            'footer': {
                                templateUrl: '/admin/html/layout_footer_fullwidth.html'
                            }
                        },
                        resolve: load(['/static/admin/src/js/controllers/vectormap.js'])
                    })
                    .state('layout.mobile', {
                        url: '/mobile',
                        views: {
                            '': {
                                templateUrl: '/admin/html/layout_mobile.html'
                            },
                            'footer': {
                                templateUrl: '/admin/html/layout_footer_mobile.html'
                            }
                        }
                    })
                    .state('layout.app', {
                        url: '/app',
                        views: {
                            '': {
                                templateUrl: '/admin/html/layout_app.html'
                            },
                            'footer': {
                                templateUrl: '/admin/html/layout_footer_fullwidth.html'
                            }
                        },
                        resolve: load(['/static/admin/src/js/controllers/tab.js'])
                    })
                    .state('apps', {
                        abstract: true,
                        url: '/apps',
                        templateUrl: '/admin/html/layout.html'
                    })
                    .state('apps.note', {
                        url: '/note',
                        templateUrl: '/admin/html/apps_note.html',
                        resolve: load(['/static/admin/src/js/app/note/note.js', 'moment'])
                    })
                    .state('apps.contact', {
                        url: '/contact',
                        templateUrl: '/admin/html/apps_contact.html',
                        resolve: load(['/static/admin/src/js/app/contact/contact.js'])
                    })
                    .state('app.weather', {
                        url: '/weather',
                        templateUrl: '/admin/html/apps_weather.html',
                        resolve: load(['/static/admin/src/js/app/weather/skycons.js', 'angular-skycons', '/static/admin/src/js/app/weather/ctrl.js', 'moment'])
                    })
                    .state('app.todo', {
                        url: '/todo',
                        templateUrl: '/admin/html/apps_todo.html',
                        resolve: load(['/static/admin/src/js/app/todo/todo.js', 'moment'])
                    })
                    .state('app.todo.list', {
                        url: '/{fold}'
                    })
                    .state('app.note', {
                        url: '/note',
                        templateUrl: '/admin/html/apps_note_material.html',
                        resolve: load(['/static/admin/src/js/app/note/note.js', 'moment'])
                    })
                    .state('music', {
                        url: '/music',
                        templateUrl: '/admin/html/music.html',
                        controller: 'MusicCtrl',
                        resolve: load([
                            'com.2fdevs.videogular',
                            'com.2fdevs.videogular.plugins.controls',
                            'com.2fdevs.videogular.plugins.overlayplay',
                            'com.2fdevs.videogular.plugins.poster',
                            'com.2fdevs.videogular.plugins.buffering',
                            '/static/admin/src/js/app/music/ctrl.js',
                            '/static/admin/src/js/app/music/theme.css'
                        ])
                    })
                    .state('music.home', {
                        url: '/home',
                        templateUrl: '/admin/html/music.home.html'
                    })
                    .state('music.genres', {
                        url: '/genres',
                        templateUrl: '/admin/html/music.genres.html'
                    })
                    .state('music.detail', {
                        url: '/detail',
                        templateUrl: '/admin/html/music.detail.html'
                    })
                    .state('music.mtv', {
                        url: '/mtv',
                        templateUrl: '/admin/html/music.mtv.html'
                    })
                    .state('music.mtvdetail', {
                        url: '/mtvdetail',
                        templateUrl: '/admin/html/music.mtv.detail.html'
                    })
                    .state('music.playlist', {
                        url: '/playlist/{fold}',
                        templateUrl: '/admin/html/music.playlist.html'
                    })
                    .state('app.material', {
                        url: '/material',
                        template: '<div ui-view class="wrapper-md"></div>',
                        resolve: load(['/static/admin/src/js/controllers/material.js'])
                    })
                    .state('app.material.button', {
                        url: '/button',
                        templateUrl: '/admin/html/material/button.html'
                    })
                    .state('app.material.color', {
                        url: '/color',
                        templateUrl: '/admin/html/material/color.html'
                    })
                    .state('app.material.icon', {
                        url: '/icon',
                        templateUrl: '/admin/html/material/icon.html'
                    })
                    .state('app.material.card', {
                        url: '/card',
                        templateUrl: '/admin/html/material/card.html'
                    })
                    .state('app.material.form', {
                        url: '/form',
                        templateUrl: '/admin/html/material/form.html'
                    })
                    .state('app.material.list', {
                        url: '/list',
                        templateUrl: '/admin/html/material/list.html'
                    })
                    .state('app.material.ngmaterial', {
                        url: '/ngmaterial',
                        templateUrl: '/admin/html/material/ngmaterial.html'
                    });

                function load(srcs, callback) {
                    return ['$ocLazyLoad', '$q',
                            function($ocLazyLoad, $q) {
                                var deferred = $q.defer();
                                var promise = false;
                                srcs = angular.isArray(srcs) ? srcs : srcs.split(/\s+/);
                                if (!promise) {
                                    promise = deferred.promise;
                                }
                                angular.forEach(srcs, function(src) {
                                    promise = promise.then(function() {
                                        if (JQ_CONFIG[src]) {
                                            return $ocLazyLoad.load(JQ_CONFIG[src]);
                                        }
                                        angular.forEach(MODULE_CONFIG, function(module) {
                                            if (module.name == src) {
                                                name = module.name;
                                            } else {
                                                name = src;
                                            }
                                        });
                                        return $ocLazyLoad.load(name);
                                    });
                                });
                                deferred.resolve();
                                return callback ? promise.then(function() {
                                    return callback();
                                }) : promise;
                            }
                        ]
                }

                function isAuthenticate(){
                    return ['$q', '$http', '$state',
                            function($q, $http, $state) {
                                var deferred = $q.defer();
                                var promise = false;

                                if (!promise) {
                                    promise = deferred.promise;
                                }

                                promise = promise.then(function() {
                                    var API = '/api/auth';
                                    // 인증정보가 없으면 백엔드에 호출함
                                    $http.get(API)
                                    .success(function(result) {

                                        if(!result['auth']){

                                            //미로그인
                                            $state.go('access.signin');

                                        }
                                        // 인증정보 저장
                                        return {
                                            auth : result['auth'],
                                            adminEmail : result['adminEmail']
                                        }

                                    })
                                    .error(function() {

                                        $state.go('access.signin');

                                    });
                                });

                                deferred.resolve();
                                return promise;
                            }
                        ]
                }

                $urlRouterProvider.otherwise("/app/dashboard-v1");

            }
        ]
    )
