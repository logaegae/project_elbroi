angular.module('app')
    .factory('SiteMainUploadCheck', function() {
        var check = {};
        check['uploaded'] = false;
        return check;
    });
