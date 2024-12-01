<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Payment Gateway Form</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
<header>
    <div class="container">
        <div class="left">
            <h3>BILLING ADDRESS</h3>
            <form action="submit.php" method="POST">
                Full name
                <input type="text" name="fullname" placeholder="Enter name" required>
                Email
                <input type="text" name=" email" placeholder="Enter email" required>
                Address
                <input type="text" name="address" placeholder="Enter address" required>
                City
                <input type="text" name="city" placeholder="Enter City" required>
                <div id="zip">
                    <label>
                        State
                        <select name="state" required>
                            <option value="">Choose State..</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Hariyana">Hariyana</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                        </select>
                    </label>
                    <label>
                        Zip code
                        <input type="number" name="zipcode" placeholder="Zip code" required>
                    </label>
                </div>
</form>
        </div>

        <div class="right">
            <h3>PAYMENT</h3>
           <form action="submit.php" method="POST">
               Accepted Card <br>
                <img src="img/card1.png" width="100">
                <img src="img/card2.png" width="50">
                <br><br>
                Credit card number
                <input type="text" name="cardnumber" placeholder="Enter number" required>
                Exp Month
                <input type="text" name="expmonth" placeholder="Enter exp month" required>
                     <div id="zip">
                        <label>
                               Exp Year
                        <select name="expyear" required>
                            <option>Choose Year..</option>
                            <option >2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option> 2026</option>
                            <option > 2027</option>
                        </select>
                    </label>
                    <label>
                        cvv
                        <input type="number" name="cvv" placeholder="Cvv" required>
                    </label>
                </div>
      </form>
      <input type="submit" name="submit" value="Proceed to order">
</div>
</div>
</header>
</body>
</html>

