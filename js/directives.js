
angular.module("jobHunterApp.directives", [
])
    .directive("recruitersView", function ($http) {
        return {
            controller: "getJobsResponseCtrl",
            controllerAs: "getJobs",
            templateUrl : "../partials/listjobs.html",
        }
    });