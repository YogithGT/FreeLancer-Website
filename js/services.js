angular.module("jobHunterApp.services", [
])
    .service("freelancerService", freelancerService);

function freelancerService() {
    var service = this;
    var items = [];
    service.addItem = function (itemName, Contact, free){
        var item = {
            name: itemName,
            Contact: Contact,
            free: free
        };
        items.push(item);
    };
    service.removeItem = function (itemIndex) {
        items.splice(itemIndex, 1);
    }
    
    service.getItems = function () {
        return items;
    }
}