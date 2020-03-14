<?php
require_once "config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form">
                <h2>Enrolment Form</h2>
                <div class="form-group-1">
                    
                    <input type="text" name="name" id="name" placeholder="Your Full Name" required />
                    <input type="text" name="fathername" id="fathername" placeholder="Father Name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="number" name="contact" id="phone_number" placeholder="Phone number" required />
                    <input type="number" name="fathercontact" id="father_number" placeholder="father's number" required />
                    <input type="text" name="address" id="address" placeholder="Address" required />
                    <input type="date" name="dob" id="dob" placeholder="Date of birth" required/>
                    <input type="text" name="class" id="class" placeholder="Class" required />
                    <input type="text" name="institute" id="institute" placeholder="School/College/University Name" required />
                    <input type="text" name="country" id="country" placeholder="Country" required />
                    <input type="text" name="city" id="city" placeholder="City" required />
                    <select name="paymentoption" id="paymentoption">
                            <option slected value="">Course Payment Option</option>
                            <option value="easypaisa">EASY PAISA</option>
                            <option value="jazzcash">JAZZ CASH</option>
                            <option value="banktransfer">BANK TRANSFER</option>
                        </select>
                </div>
              
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Submit" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>