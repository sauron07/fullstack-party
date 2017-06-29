'use strict';

app.controller('AppController', ['$scope', '$location', function ($scope, $location) {

    $scope.query = 'symfony';
    $scope.search = function () {
        $location.path('list').search({q: $scope.query})
    };
}]);
