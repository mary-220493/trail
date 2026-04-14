const brandName = "StreetZen"; 
let storeStatus = "Closed"; 


console.log("Brand Name: " + brandName);
console.log("Original Status: " + storeStatus);

storeStatus = "Open Now";
console.log("Updated Status: " + storeStatus);

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("status-text").innerText = storeStatus;
    document.getElementById("brand-display").innerText = brandName;
});

function getWelcomeMessage(userName) {
    return "Hello " + userName + ", welcome to our store!";
}

const calculatePrice = function(price, discount) {
    let finalPrice = price - discount;
    return finalPrice;
};

const updateMainHeading = (newText) => {
    document.getElementById("user-greeting").innerText = newText;
};

let manager = {
    name: "Alex Zen",
    role: "Stylist",
    years: 5,
    
    promote: function() {
        this.years = this.years + 1;
        this.role = "Senior Designer";
        return this.name + " is now a " + this.role + " with " + this.years + " years experience!";
    }
};

console.log("Manager Name (Dot): " + manager.name);
console.log("Manager Role (Bracket): " + manager["role"]);
-
function startExperience() {
    alert("Welcome to the StreetZen Interactive Experience!");

    let yourName = prompt("Please enter your name:");
    
    if (yourName != null && yourName != "") {

        updateMainHeading(getWelcomeMessage(yourName));
    }

    let showDiscount = confirm("Do you want to see a secret price update?");
    if (showDiscount) {
        let newPrice = calculatePrice(1500, 300);
        alert("Special Update: 1500rs package is now only " + newPrice + "rs!");
    }
}
// Events and Event Listeners
document.addEventListener("DOMContentLoaded", function() {
    // Get the elements
    const startBtn = document.getElementById("start-btn");
    const promoBtn = document.getElementById("promo-btn");

    // Click Event
    if (startBtn) {
        startBtn.addEventListener("click", startExperience);
    }
   // Click Event
    if (promoBtn) {
        promoBtn.addEventListener("click", function() {
            let message = manager.promote();
            document.getElementById("manager-info-text").innerText = message;
        });
    }
});
