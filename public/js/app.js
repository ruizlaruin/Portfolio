import './bootstrap';


// Get the button that toggles dark mode
const toggleBtn = document.getElementById("toggle-btn");

// Get the body element
const body = document.body;

// Add event listener to the toggle button
toggleBtn.addEventListener("click", function() {
  // Toggle the "dark" class on the body element
  body.classList.toggle("dark");
});