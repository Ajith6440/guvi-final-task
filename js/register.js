function register() {
    // Get form values
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("confirm_password").value;
    // Check if required fields are filled out
    if (username == "" || email == "" || password == "") {
      alert("Please fill out all required fields.");
      return;
    }
  
    // TODO: Send registration data to server and handle response
  
    // Clear form
    document.getElementById("username").value = "";
    document.getElementById("email").value = "";
    document.getElementById("password").value = "";
    document.getElementById("confirm-password").value = "";
  }