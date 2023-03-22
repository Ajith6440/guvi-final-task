// Get the username and password input fields
const usernameField = document.getElementById("username");
const passwordField = document.getElementById("password");

// Get the login button
const loginButton = document.getElementById("login-button");

// Add an event listener to the login button
loginButton.addEventListener("click", function() {
  // Get the values of the username and password fields
  const username = usernameField.value;
  const password = passwordField.value;
  
  // Check if the username and password are not empty
  if (username.trim() !== "" && password.trim() !== "") {
    // Redirect to the user's dashboard or display a success message
    alert("Login successful!");
    // window.location.href = "dashboard.html";
  } else {
    // Display an error message
    alert("Please enter a username and password.");
  }
});