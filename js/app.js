angular.module("jobHunterApp", [
    "ngRoute"
])
.config(function ($routeProvider, $locationProvider) {
        $routeProvider.
            when("/", { templateUrl: "partials/home.html" }).
            when("/freelancers", { templateUrl: "partials/freelancers.html" }).
            when("/recruiters", { templateUrl: "partials/recruiters.html" }).
            when("/register", { templateUrl: "partials/register.html" }).
            otherwise({ redirectTo: '/' });
        $locationProvider.html5Mode(true);
});