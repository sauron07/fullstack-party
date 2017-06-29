'use strict';

var app = angular.module('app', [
    'ngRoute',
    'hc.marked'
]);

app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'templates/index.html'
        })
        .when('/login', {
            templateUrl: 'templates/login.html',
            controller: 'LoginController'
        })
        .when('/:owner/:repository/issue', {
            templateUrl: 'templates/issue/list.html'
        })
        .when('/:owner/:repository/issue/:issueNumber', {
            templateUrl: 'templates/issue/entry.html'
        });
}]);

app.constant('API_URL', 'http://127.0.0.1:8000/app_dev.php/');