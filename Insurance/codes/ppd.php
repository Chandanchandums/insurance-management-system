<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.1.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./ppd.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="./images/bajaj-alli.jpg" alt="logo" width="125px" height="60px" class="d-inline-block align-text-top">
            </a>
            <ul>
                <li><a href="#plan">Plans</a></li>
                <li><a href="#regs">Registrations</a></li>
                <li><a href="./index.html">Logout</a></li>
            </ul>
        </div>
    </nav>
    <form action="./admin.html">
    <input type="submit" value="BACK" class="back">
    </form>
    <div class="plan" id="plan">
        <?php
            include('connection.php');
            $sql_query=mysqli_query($con,"SELECT * FROM prop_ins");
            while($res=mysqli_fetch_array($sql_query))
            {
                ?>
                    <div class="pland" style="border-radius:20px;overflow:hidden;">
                    <h1 class="pname" style="background-color:#009578;color:#ffffff;padding-bottom:2%;padding-top:1%;font-size:50px;font-weight:bolder;"><?php echo $res['plan_name'];?></h1>
                    <h2 class="pay" style="font-size:40px;font-weight:bold;padding-left:1%;">Pay</h2>
                    <h2 class="pamnt" style="text-align:center;font-size:60px;font-weight:bold;">Rs.<?php echo $res['pamnt'];?></h2>
                    <h2 class="tg" style="text-align:center;font-size:20px;">To get sum insured of</h2>
                    <h3 class="imnt" style="text-align:center;font-size:40px;"><?php echo $res['iamnt'];?></h3>
                    <h2 class="for" style="text-align:center;font-size:20px;">For</h2>
                    <h4 class="tp" style="text-align:center;font-size:40px;"><?php echo $res['tp'];?></h4>
                    <h2 class="years" style="text-align:center;font-size:20px;">Years.</h2>
                    <form action="./ppd_delete.php" method="POST">
                    <input type="hidden" name="rn" value="<?php echo $res['pplanid'];?>">
                    <input type="submit" value="DELETE" class="button">
                    </form>   
                </div>
         <?php
            }
        ?>
        <div class="insert">
            <a href="./ppd_insert.html"><img src="./icons/plus-square-dotted.svg" alt="plus" height="40px" width="10%"></a>   
        </div>
    </div>
    <div class="regs" id="regs">
        <h1>REGISTRATIONS</h1>
        <table width="100%" border="1">
        <tr>
            <th>Registration-ID</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Mobile-No</th>
            <th>Plan</th>
            <th>Property Address</th>
            <th>Property Size</th>
        </tr>
        <?php
        include('connection.php');
        $q="SELECT * FROM preg";
        $q=mysqli_query($con,$q);
        while($res=mysqli_fetch_array($q)){
        ?>
        <tr>
            <td><?php echo $res['regid'];?></td>
            <td><?php echo $res['iname'];?></td>
            <td><?php echo $res['dob'];?></td>
            <td><?php echo $res['email'];?></td>
            <td><?php echo $res['mobno'];?></td>
            <td><?php echo $res['pname'];?></td>
            <td><?php echo $res['propaddress'];?></td>
            <td><?php echo $res['propsize'];?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        </div>
       
</body>
</html>