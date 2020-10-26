angular.module("jobHunterApp", [
    "jobHunterApp.controllers",
    "jobHunterApp.services",
    "jobHunterApp.directives",
    "ngRoute"
])
.config(['$routeProvider', function($routeProvider) {
  $routeProvider.
	when("/", {templateUrl: "index.html"}).
    when("/freelancers", { templateUrl: "partials/freelancer.html"}).
	when("/recruiters", {templateUrl: "partials/recruiters.html"}).
	when("/register", {templateUrl: "partials/register.html"}).
	otherwise({redirectTo: '/'});
}])
.controller("mainCtrl", function ($route) { 
    $scope.$route = $route;
 });