<html>
<head>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<input type="text" name="uname1" value="<?php if(isset($_POST['uname1'])) echo $_POST['uname1']; ?>"><br>
<input type="text" name="upswd1" value="<?php if(isset($_POST['upswd1'])) echo $_POST['upswd1']; ?>"><br>
<input type="submit" value="log" name="submit">
</form>

<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $uname1 = $_POST['uname1'];
    $upswd1 = $_POST['upswd1'];
    
    // Prepare and bind statement
    $stmt = $con->prepare("SELECT * FROM log WHERE uname1=? AND upswd1=?");
    $stmt->bind_param("ss", $uname1, $upswd1);

    // Execute statement
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Check if login is successful
    if ($result->num_rows == 1) {
        echo "Login successful";
        echo header("Location: product.php");
    } else {
        echo "Login failed. Please check your username and password.";
    }
    
    // Close statement
    $stmt->close();
}
?>

</body>
</html>
