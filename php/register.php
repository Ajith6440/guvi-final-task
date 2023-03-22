<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "Ajith2601";
$dbname = "guvi_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if(isset($_POST['register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	// Validate form data
	if(empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
		echo "All fields are required.";
	} elseif($password !== $confirm_password) {
		echo "Passwords do not match.";
	} else {
		// Insert user into database
		$sql = "INSERT INTO users (username, email, password)
		VALUES ('$username', '$email', '$password')";

		if (mysqli_query($conn, $sql)) {
		  echo "Registration successful.";
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}

// Close database connection
mysqli_close($conn);
?>