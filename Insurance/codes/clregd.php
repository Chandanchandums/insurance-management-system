<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./cvregd.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="./images/bajaj-alli.jpg" alt="logo" width="125px" height="60px" class="d-inline-block align-text-top">
            </a>
            <ul>
            <li><a href="./index.html">LOGOUT</a></li>
                <li><a href="./clpd.php?id=<?php echo $_GET['id']?>">PLANS</a></li>
            </ul>
        </div>
    </nav>
<?php
include('connection.php');
$id=$_GET['id'];
$q="SELECT * from lreg WHERE cid=$id";
$query=mysqli_query($con,$q);
?>
<table>
    <tr>
        <th>Name</th>
        <th>Date Of Birth</th>
        <th>E-mail</th>
        <th>Mobile Number</th>
        <th>Address</th>
        <th>Plan Name</th>
        <th>Nominee Name</th>
        <th>Nominee Relation</th>
        <th>Nominee Contact</th>
    </tr>
    <?php
        while($res=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $res['iname']?></td>
                <td><?php echo $res['dob']?></td>
                <td><?php echo $res['email']?></td>
                <td><?php echo $res['mobno']?></td>
                <td><?php echo $res['address']?></td>
                <td><?php echo $res['pname']?></td>
                <td><?php echo $res['nname']?></td>
                <td><?php echo $res['nrelation']?></td>
                <td><?php echo $res['ncontact']?></td>
            </tr>

            <?php
        }
    ?>
</table>
</body>
</html>