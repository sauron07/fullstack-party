'use strict';

app.service('ApiService', ['$http', 'API_URL', function ($http, API_URL) {
    return {
        get: function ($url, config, successCallback, errorCallback) {
            return $http.get(API_URL + $url, config).then(successCallback, errorCallback);
        }
    }
}]);
