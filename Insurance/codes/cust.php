<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.1.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="stylesheet" href="./cust.css">
    <title>ADMIN</title>
</head>
<body>
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./images/bajaj-alli.jpg" alt="logo" width="125px" height="60px" class="d-inline-block align-text-top">
                </a>
                <ul>
                    <li><a href="./index.html">LOGOUT</a></li>   
                </ul>
                
            </div>
            <ul>
                <h1>Wallet</h1>
                <?php 
                include('connection.php');
                $sql_query=mysqli_query($con,"SELECT * FROM clogin");
                $res=mysqli_fetch_array($sql_query) ?>
                <h1  style="text-align:center;font-size:20px;"><?php echo $res['wallet'] ?></h1>
            </ul>
        </nav>
        <div class="flex-display">
            
            <div class="one">
            <?php
            $id=$_GET['rn'];
            ?>
                <a href="./cvpd.php?id=<?php echo $id?>">
                <img src="./images/car.png" alt="" srcset="">
                <h1>Vehicle Insurance</h1></a>
            </div>
            <div class="one">
                <a href="./chpd.php?id=<?php echo $id?>">
                    <img src="./images/health.png" alt="" srcset="">
                    <h1>Health Insurance</h1></a>
            </div>
            <div class="one">
                <a href="clpd.php?id=<?php echo $id?>">
                    <img src="./images/life.png" alt="" srcset="">
                    <h1>Life Insurance</h1></a>
            </div>
            <div class="one">
                <a href="cppd.php?id=<?php echo $id?>">
                    <img src="./images/prop.png" alt="" srcset="">
                    <h1>Property Insurance</h1></a>
            </div>
        </div>
</body>
</html>