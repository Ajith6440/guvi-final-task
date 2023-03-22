<?php
// establish a MongoDB connection
$mongo = new MongoDB\Driver\Manager("mongodb://localhost:27017");

// specifing the database and collection name
$dbName = "mydb";
$collectionName = "profiles";

// defining the user input for profile data
$age = $_POST['age'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];

// creating a new document with the user input
$newProfile = array(
  'age' => $age,
  'dob' => $dob,
  'contact' => $contact
);

// insert the new document into the specified collection
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert($newProfile);
$result = $mongo->executeBulkWrite("$dbName.$collectionName", $bulk);

// check for errors or success
if($result){
  echo "Profile data saved successfully!";
} else {
  echo "Error: Profile data could not be saved.";
}

?>