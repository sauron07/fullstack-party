'use strict';

app.controller('IssueController', ['$scope', 'ApiService', '$routeParams', '$location', function ($scope, ApiService, $routeParams, $location) {

    $scope.showLoader = true;

    $scope.currentPage = 1;

    $scope.initIssueList = function () {
        $scope.repository = $routeParams.repository;
        $scope.owner = $routeParams.owner;
        $scope.currentPage = $location.search().page;

        ApiService.get($scope.owner + '/' + $scope.repository + '/issue/' + '?page=' + $scope.currentPage, {},
            function (response) {
                $scope.showLoader = false;
                $scope.list = response.data.body;
                $scope.links = response.data.links
            },
            function () {

            }
        );
    };

    $scope.clickPage = function (page) {
        var owner = $routeParams.owner;
        var repository = $routeParams.repository;
        $location.path(owner + '/' + repository + '/issue/').search({page: page});
    };

    $scope.openIssue = function (issueNumber) {
        $location.path($scope.owner + '/' + $scope.repository + '/issue/' + issueNumber)
    };

    $scope.goBackToIssueList = function () {
        var owner = $routeParams.owner;
        var repository = $routeParams.repository;
        $location.path(owner + '/' + repository + '/issue/')
    };

    $scope.initIssuePage = function () {
        var owner = $routeParams.owner;
        var repository = $routeParams.repository;
        var issueNumber = $routeParams.issueNumber;

        ApiService.get(owner + '/' + repository + '/issue/' + issueNumber, {},
            function ($response) {
                $scope.showLoader = false;
                $scope.issue = $response.data.body;
                if ($scope.issue.comments > 0) {
                    ApiService.get(owner + '/' + repository + '/issue/' + issueNumber + '/comments', {},
                        function (response) {
                            $scope.comments = response.data.body;
                        });
                }
            },
            function () {

            }
        );
    }

}]);
