angular.module("jobHunterApp", [
    "jobHunterApp.controllers",
    "jobHunterApp.services",
    "jobHunterApp.directives",
    "ngRoute"
]);


config(['$routeProvider', function($routeProvider) {
  $routeProvider.
	when("/", {templateUrl: "index.html"}).
    when("/freelancers", { templateUrl: "partials/freelancer.html", controller: "freelancerShowController" }).
	when("/recruiters", {templateUrl: "partials/recruiters.html", controller: "freelancerShowController"}).
	when("/register", {templateUrl: "partials/register.html", controller:"freelancerAddController"}).
      
	otherwise({redirectTo: '/'});
}]);