<?php

require_once "config.php";

// echo $_POST['password'];
// echo $_REQUEST['password'];

if(isset($_POST['submit'])){
if($_REQUEST['password'] == "taha"){
    header("location: index.html");
    exit();
}
elseif($_REQUEST['password'] == "Taha"){

    header("location: registerform.php");
    exit();
}
else{
    // echo "<script>alert('password incorrect!')</script>";
    echo json_encode(array("msg"=>"Invalid Username"));
}
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    
    <form action="" method="post">

        <center> <h2>Login Page</h2> </center>
        <center> <input type="text" name="username" id="username" placeholder="Username"><br><br>
        <input type="password" name="password" id="password" placeholder="password"> <br> <br>
        
        <center><input type="submit" name="submit" value="sumbit"> </center>
        <!-- <a href="mailto:abc@example.com?subject = Feedback&body = Message"> Forgot Password?</a>  -->
        <a href="mailto:mobinurrehman@gmail.com?bcc=&subject=Need%20the%20password!&body=Hi%20Concern%20Commettee,%0d%0dI%20forgot%20the%20my%20exsisting%20password%20of%20my%20course.%20Please%20send%20me%20again%0d%0dName:%0d" rel="EMAIL">Forgot Password!</a> 
        <!-- %20 for white space and %0d for one line gap -->
    </center>
        
    </form>


</body>
</html>