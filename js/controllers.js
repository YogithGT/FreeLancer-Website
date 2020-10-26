angular.module("jobHunterApp.controllers", [
    "jobHunterApp.services",
])
    .controller('freelancerAddController', freelancerAddController)
    .controller('freelancerShowController', freelancerShowController);


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
            
freelancerShowController.$inject=['freelancerService'];
function freelancerShowController(freelancerService){
    var showList=this;
    showList.items=freelancerService.getItems();
    showList.removeItem = function (itemIndex) {
        freelancerService.removeItem(itemIndex);
    };
}