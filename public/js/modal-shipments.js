"use strict";
 
const shipmentsModalWindow = document.getElementById("shipments-modal");

const shipmentsOpenButtons = document.querySelectorAll(".shipments-open");

const shipmentsCloseButton = document.getElementById("shipments-close");



const shipmentsOpen = () => {
   shipmentsModalWindow.classList.add("flex");
   shipmentsModalWindow.classList.remove("hidden");
};

const shipmentsClose = () => {
   shipmentsModalWindow.classList.add("hidden");
   shipmentsModalWindow.classList.remove("flex");
};


shipmentsOpenButtons.forEach((element) => {
   element.addEventListener('click', shipmentsOpen)
});
shipmentsCloseButton.addEventListener('click', shipmentsClose);

