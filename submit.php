<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "snehak";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Collect form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    // SQL query to insert data into the table using prepared statements
    $sql = "INSERT INTO billing_info (fullname, email, address, city, state, zipcode, cardnumber, expmonth, expyear, cvv) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $fullname, $email, $address, $city, $state, $zipcode, $cardnumber, $expmonth, $expyear, $cvv);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Payment successful. Thank you for your order!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Error: Form not submitted.";
}

// Close connection
$conn->close();
?>
