<?php
require_once "config.php";

$query="SELECT * FROM studentinfo";
$result=mysqli_query($connection ,$query);
?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Check Fee</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            body {
                background-color: whitesmoke;
            }
            
            input {
                width: 40%;
                height: 5%;
                border: 1px;
                border-radius: 5px;
                padding: 8px 15px 8px 15px;
                margin: 10px 0px 15px 0px;
                box-shadow: 1px 1px 2px 1px grey;
            }
        </style>
    </head>

    <body>

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="icon" type="image/png" href="assests/logo.jpg">

            <title>Fee Insertion</title>
        </head>

        <body>
            <table aligin="center" border="1px" style="width:608px; line-height:48px;">
                <tr>
                    <br>
                    <th>
                        <h2> Registered Students</h2></th>
                </tr>

                <!-- <table aligin="center" border="1px" style="width:608px; line-height:48px;"> -->
                <table class="table">
                    <thead class="thead-light">
                        <th scope="col">id</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Father's Name</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Father's Contact</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Class</th>
                        <th scope="col">Institute</th>
                        <th scope="col">Country</th>
                        <th scope="col">City</th>
                        <th scope="col">Payment Option</th>
                    </thead>

                    <?php 
    while($rows =mysqli_fetch_assoc($result)){

    ?>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <?php echo $rows['id'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['name'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['fathername'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['contact'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['email'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['fathercontact'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['address'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['dob'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['class'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['institute'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['country'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['city'];?>
                                </td>
                                <td scope="row">
                                    <?php echo $rows['paymentstatus'];?>
                                </td>

                            </tr>
                            <?php
    }?>
                        </tbody>
                </table>

                <!-- </table>    
    </table> -->
                <br>
                <br>
                <hr>
                <br>
                <a href="index.html">Go to Homepage!</a>
        </body>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </html>