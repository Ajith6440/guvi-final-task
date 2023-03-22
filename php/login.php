<?php

// Start session and set session name
session_name('my_session');
session_start();

// Connect to Redis server
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

// Check if user is already logged in
if (isset($_SESSION['username'])) {
  header('Location: login.php');
  exit;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Authenticate user
  if ($username == 'admin' && $password == 'password123') {
    // Set session variables
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;

    // Set Redis key-value pair for session ID and session data
    $session_id = session_id();
    $session_data = json_encode($_SESSION);
    $redis->set($session_id, $session_data);

    // Redirect to welcome page
    header('Location: profile.php');
    exit;
  } else {
    // Display error message
    $error_msg = 'Invalid username or password';
  }
}

?>
 