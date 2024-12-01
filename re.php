<?php
if (!empty($_POST['uname1']) && !empty($_POST['email']) && !empty($_POST['upswd1']) && !empty($_POST['upswd2'])) {
    $uname1 = $_POST['uname1'];
    $email = $_POST['email'];
    $upswd1 = $_POST['upswd1'];
    $upswd2 = $_POST['upswd2'];

    // Check if passwords match
    if ($upswd1 !== $upswd2) {
        echo "Passwords do not match";
        exit;
    }

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "project";

    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Prepare and bind SQL statements
    $stmt = $conn->prepare("SELECT email FROM register1 WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Someone already registered using this email";
    } else {
        $stmt->close();

       $hash_password = password_hash($upswd1, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO register1 (uname1, email, upswd1, upswd2) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $uname1, $email, $hash_password, $hash_password);
        
        
        if ($stmt->execute()) {
            echo "New record inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
} else {
    echo "All fields are required";
}
?>