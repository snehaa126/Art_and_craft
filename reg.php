<!DOCTYPE html>
<head>
<title>Register Form Design</title>
    <link rel="stylesheet" type="text/css" href="styl.css">

<body>

    <div class="box">
    <img src="img/g.png" class="user">

        <h1>Register Here</h1>

        <form name="myform2" action="re.php" method="POST">

            <p>Username</p>
            <input type="text" name="uname1" placeholder="Enter Username" required="">

            <p>Email</p>
            <input type="Email" name="email" placeholder="Enter email id" required="">

            <p>Password</p>
            <input type="password" name="upswd1" placeholder="Enter Password" required="">

            <p>Confirm Password</p>
            <input type="password" name="upswd2" placeholder="confirm Password" required="">

            <input type="submit" name="" value="Register">

            <br><br>
            <a href="ind.php">Existing user, login !?</a>
        </form>
        
    </div>

</body>
</head>
</html>