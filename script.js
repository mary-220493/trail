/**
 * StreetZen JavaScript Lab Task-4 (Beginner Friendly)
 * This script demonstrates Variables, Functions, Objects, Methods, Pop-ups, and Events.
 */

// --- 1. Variables (let and const) ---
// const is used for values that NEVER change
const brandName = "StreetZen"; 

// let is used for values that CAN change
let storeStatus = "Closed"; 

// Logging values to the Console (F12)
console.log("Brand Name: " + brandName);
console.log("Original Status: " + storeStatus);

// Reassigning (updating) the 'let' variable
storeStatus = "Open Now";
console.log("Updated Status: " + storeStatus);

// Displaying variable values on the web page when it loads
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("status-text").innerText = storeStatus;
    document.getElementById("brand-display").innerText = brandName;
});


// --- 2. Functions (Different Types) ---

// A) Function Declaration (Standard way)
function getWelcomeMessage(userName) {
    return "Hello " + userName + ", welcome to our store!";
}

// B) Function Expression (Storing a function in a variable)
const calculatePrice = function(price, discount) {
    let finalPrice = price - discount;
    return finalPrice;
};

// C) Arrow Function (Short way to write functions)
const updateMainHeading = (newText) => {
    document.getElementById("user-greeting").innerText = newText;
};


// --- 3. Objects & 4. Methods ---
// Creating an Object to represent a Store Manager
let manager = {
    name: "Alex Zen",
    role: "Stylist",
    years: 5,
    
    // This is a Method (a function inside an object)
    // 'this' refers to the object itself
    promote: function() {
        this.years = this.years + 1; // Update property
        this.role = "Senior Designer";
        return this.name + " is now a " + this.role + " with " + this.years + " years experience!";
    }
};

// Accessing Object Properties using Dot and Bracket notation
console.log("Manager Name (Dot): " + manager.name);
console.log("Manager Role (Bracket): " + manager["role"]);


// --- 5. Pop-up Boxes (Interaction) ---
function startExperience() {
    // 1. Alert (Notification)
    alert("Welcome to the StreetZen Interactive Experience!");

    // 2. Prompt (Asks user for input)
    let yourName = prompt("Please enter your name:");
    
    if (yourName != null && yourName != "") {
        // Use our function to update the text
        updateMainHeading(getWelcomeMessage(yourName));
    }

    // 3. Confirm (Yes/No Question)
    let showDiscount = confirm("Do you want to see a secret price update?");
    if (showDiscount) {
        let newPrice = calculatePrice(1500, 300);
        alert("Special Update: 1500rs package is now only " + newPrice + "rs!");
    }
}


// --- 6. Events and Event Listeners ---
document.addEventListener("DOMContentLoaded", function() {
    // Get the elements from HTML using their IDs
    const startBtn = document.getElementById("start-btn");
    const promoBtn = document.getElementById("promo-btn");

    // Click Event: Trigger the startExperience function
    if (startBtn) {
        startBtn.addEventListener("click", startExperience);
    }

    // Click Event: Perform the Object Method
    if (promoBtn) {
        promoBtn.addEventListener("click", function() {
            let message = manager.promote();
            document.getElementById("manager-info-text").innerText = message;
        });
    }
});
