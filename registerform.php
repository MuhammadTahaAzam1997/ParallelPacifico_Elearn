<?php 

require_once "config.php";

if(isset($_POST["submit"])){

    $name=$_POST["name"];
    $fname=$_POST["fname"];
    $num=$_POST["num"];
    $fnum=$_POST["fnum"];
    $email=$_POST["email"];
    
    
    $ins=$_POST["ins"];


    mysqli_query($connection,"insert into traffic(name,fname,num,email,fnum,ins) values ('$name','$fname','$num','$email','$fnum','$ins')");





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
                <center> <img src="assests/logo.jpg" alt="" class="logo rounded" width="55px" height="auto"> </center>
    
                <center>
                        <h2>Enrolment Form</h2> </center>
                    <center>
                        <input type="text" name="name" id="" placeholder="Fullname">
                        <input type="text" name="fname" id="" placeholder="Father's name">
                        <input type="number" name="num" id="" placeholder="03**-*******">
                        <input type="number" name="fnum" id="" placeholder="Father's contact">
                        <input type="email" name="email" id="" placeholder="email">
                        <input type="text"  name="ins"  id="" placeholder="School/College/University Name">
                        
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" value="sumbit"> </center>
                    
                </center>

            </form>

            <!-- JS -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="js/main.js"></script>
    </body>
  

    </html>
