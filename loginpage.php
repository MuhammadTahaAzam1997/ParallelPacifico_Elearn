<?php

require_once "config.php";

// echo $_POST['password'];
// echo $_REQUEST['password'];

if(isset($_POST['submit'])){
if($_REQUEST['password'] == "Taha"){
    header("location: index.html");
    exit();
}
elseif($_REQUEST['password'] == "taha"){

    header("location: Lectures.html");
    exit();
}
else{
    // echo "<script>alert('password incorrect!')</script>";
    echo json_encode(array("msg"=>"Invalid Username"));
}
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Page</title>

        <link rel="stylesheet" href="style.css">

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="assests/logo.jpg">

    </head>

    <body>

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form" style="padding-top:100px;">
                <div class="form-group-1">
                    <center>
                        <h2>Login Page</h2> </center>
                    <center>
                        <input type="text" name="username" id="username" placeholder="Username">
                        <br>
                        <br>
                        <input type="password" name="password" id="password" placeholder="password">
                        <br>
                        <br>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit"  class="btn color-btn" value="sumbit"> </center>
                    <!-- <a href="mailto:abc@example.com?subject = Feedback&body = Message"> Forgot Password?</a>  --></div>
                <center><a href="mailto:mobinurrehman@gmail.com?bcc=&subject=Need%20the%20new%20password!&body=Hi%20Concern%20Commettee,%0d%0dI%20forgot%20my%20exsisting%20password%20of%20my%20course.%20Please%20send%20me%20again%0d%0dName:%0d" rel="EMAIL">Forgot Password!</a>
                    <!-- %20 for white space and %0d for one line gap -->
                </center>

            </form>

            <!-- JS -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="js/main.js"></script>
    </body>
    </body>

    </html>