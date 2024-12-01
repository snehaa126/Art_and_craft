<?php
// including the database configuration file
include "db.php";

// Extracting the submitted form data
extract($_POST);

// Creating a new mysqli object
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Checking for errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Preparing the SQL query with placeholders for values
$sql = "INSERT INTO `contact-data` (`firstname`, `lastname`, `phone`, `email`, `message`) VALUES  ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";

// Preparing the statement for execution
$stmt = $mysqli->prepare($sql);

// Checking for errors
if ($stmt === false) {
    echo "Error preparing the statement: " . $mysqli->error;
}


// Setting the values for the parameters
$firstname = htmlspecialchars(strip_tags($firstname));
$lastname = htmlspecialchars(strip_tags($lastname));
$phone = htmlspecialchars(strip_tags($phone));
$email = htmlspecialchars(filter_var($email, FILTER_SANITIZE_EMAIL));
$message = htmlentities(strip_tags($message));

// Executing the prepared statement
if ($stmt->execute()) {
    echo "Thank You For Contacting Us";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

// Closing the prepared statement
$stmt->close();

// Closing the database connection
$mysqli->close();
?>