angular.module("jobHunterApp", [
    "jobHunterApp.services",
    "jobHunterApp.controllers",
    "jobHunterApp.directives",
    "ngRoute"
])
    .config(function ($routeProvider, $locationProvider, $sceDelegateProvider) {
        $routeProvider.
            when("/", { templateUrl: "partials/home.html" }).
            when("/freelancers", { templateUrl: "partials/freelancers.html" }).
            when("/recruiters", { templateUrl: "partials/recruiters.html" }).
            when("/register", { templateUrl: "partials/register.html" }).
            otherwise({ redirectTo: '/' });
        $locationProvider.html5Mode(true);
        $sceDelegateProvider.resourceUrlWhitelist([
            // Allow same origin resource loads.
            'self',
            // Allow loading from our assets domain.  Notice the difference between * and **.
            'https://jobs.github.com/positions.json'
        ]);
    });