<html>
  
</body>


<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["LOGIN"])) {
$user=$_POST['usernames'];
$password=$_POST['passwords'];

$sql="INSERT INTO admin_login(sno, uername, password) VALUES (NULL,'$user','$password')";



//validation


  $admin_username="pooja";
  $admin_password="admin123";

  if($user===$admin_username && $password===$admin_password){
 
    
    echo"<script>alert('successfully login ,welcome to admin');window.location.href='DASHBOARD.php';</script>";
    

  }
 
else {
  // Display error message (if needed)
  echo"<script>alert('Invalid username or password. Please try again.');window.location.href='LOGIN.php';</script>";
}

}

 
$conn->close();


?>

</body>
</html>