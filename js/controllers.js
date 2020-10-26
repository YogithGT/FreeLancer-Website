angular.module("jobHunterApp.controllers", [
])
    .controller('freelancerAddController', freelancerAddController)
    .controller('freelancerShowController', freelancerShowController)
    .controller('getJobsResponseCtrl', getJobsResponseCtrl);


freelancerAddController.$inject=['$location','freelancerService'];
function freelancerAddController($location, freelancerService){
    var itemAdder=this;
    itemAdder.itemName="";
    itemAdder.itemContact="";
    itemAdder.itemfree="";
    itemAdder.addItem = function (){
        freelancerService.addItem(itemAdder.itemName, itemAdder.itemContact, itemAdder.itemfree);
        $location.path("/freelancers");
    }
}
            
freelancerShowController.$inject = ['freelancerService'];
function freelancerShowController(freelancerService){
    var showList=this;
    showList.items=freelancerService.getItems();
    showList.removeItem = function (itemIndex) {
        freelancerService.removeItem(itemIndex);
    };
}

getJobsResponseCtrl.$inject = ['$http']
function getJobsResponseCtrl($http) {
    $http.jsonp("https://jobs.github.com/positions.json", [{
        header: {
                    'Access-Control-Allow-Credentials' : true,
                    'Access-Control-Allow-Origin':'*',
                    'Access-Control-Allow-Methods':'GET',
                    'Access-Control-Allow-Headers':'application/json',
                }
            }]).then(function success(response) {
        $scope.jobs = response.data;
        console.log($scope.jobs);
    }, function error(response) {
            console.log(response);       
    });
}