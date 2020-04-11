
<?php
require_once "config.php";

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $fathername=$_POST['fathername'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $fathercontact=$_POST['fathercontact'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $class=$_POST['class'];
    $institute=$_POST['institute'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $paymentstatus=$_POST['paymentstatus'];

    mysqli_query($connection,"insert into commerceolevel(name,fathername,contact,email,fathercontact,address,dob,class,institute,country,city,paymentstatus) values ('$name','$fathername','$contact','$email','$fathercontact','$address','$dob','$class','$institute','$country','$city','$paymentstatus')");

    $msg="submitted";
    echo "<script type='text/javascript'>alert('$msg');</script>";
    // header('location: index.html');        
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commerce Olevel Register Form</title>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="assests/logo.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form">
                <center> <img src="assests/logo.jpg" alt="" class="logo rounded" width="55px" height="auto"> </center>

                <center>
                    <h2>Enrolment Form</h2> </center>
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
                    <select name="paymentstatus" id="paymentstatus">
                        <option slected value="">Course Payment Option</option>
                        <option value="easypaisa">EASY PAISA</option>
                        <option value="jazzcash">JAZZ CASH</option>
                        <option value="banktransfer">BANK TRANSFER</option>
                    </select>
                </div>

                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the <a target="_blank" href="https://www.therqa.com/learning/terms-and-conditions/elearning-terms-and-conditions/" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <a href="Lectures.html" target="_blank">
                        <input type="submit" class="btn color-btn" name="submit" id="submit" value="submit">
                    </a>

                </div>
            </form>
        </div>

    </div>
    <div class="modal" id="modal2">
        <div class="modal__dialog text-center">
            <section class="modal__content">
                <header class="modal__header">
                    <!-- <h2 class="modal__title">This is simple modal window</h2> -->
                    <a href="#" class="modal__close">&times;</a>
                </header>
                <div class="modal__body">
                    <!-- <img src="https://placehold.it/200x100" alt="modal image" class="modal__image"> -->
                    <p class="modal__text">Form has been Submitted
                        <br> Easypaisa : 03422506772
                        <br> Jazzcash: 03422506772</p>
                </div>
                <footer class="modal__footer">
                    <a href="#modal" class="btn color-btn">Enroll Now</a>
                </footer>
            </section>
        </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>