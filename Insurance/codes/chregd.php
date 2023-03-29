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
                <li><a href="./chpd.php?id=<?php echo $_GET['id']?>">PLANS</a></li>
            </ul>
        </div>
    </nav>
<?php
include('connection.php');
$id=$_GET['id'];
$q="SELECT * from hreg WHERE cid=$id";
$query=mysqli_query($con,$q);
$agg="SELECT count($id) AS cnt from hreg WHERE cid=$id";
$aggquery=mysqli_query($con,$agg);
$join="SELECT hr.iname,hi.tp from hreg AS hr INNER JOIN health_ins AS hi ON hr.pid=hi.hplanid";
$joinquery=mysqli_query($con,$join);
$rjoin="SELECT * from hreg AS hr Right JOIN health_ins AS hi ON hr.pid=hi.hplanid";
$rjoinquery=mysqli_query($con,$rjoin);
$procedure_With_cursor=mysqli_query($con,'CALL procedure_cursor()');

?>
<table>
    <tr>
        <th>Name</th>
        <th>Date Of Birth</th>
        <th>E-mail</th>
        <th>Mobile Number</th>
        <th>Address</th>
        <th>Plan Name</th>
        <th>Disease</th>
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
                <td><?php echo $res['disease']?></td>
            </tr>

            <?php
        }
    ?>
</table>
<table>
    <tr>
        <th>Count</th>
    </tr>
    <?php
        while($ress=mysqli_fetch_array($aggquery)){
            ?>
            <tr>
                <td><?php echo $ress['cnt']?></td>
            </tr>
            <?php
        }
    ?>
            

</table>
<table>
    <tr>
        <th>Name</th>
        <th>TP</th>
    </tr>
    <?php
        while($joinres=mysqli_fetch_array($joinquery)){
            ?>
            <tr>
                <td><?php echo $joinres['iname']?></td>
                <td><?php echo $joinres['tp']?></td>
            </tr>
            <?php
        }
    ?>
            
</table>

<table>
    <tr>
        <th>hplanid</th>
        <th>plan_name</th>
        <th>pamnt</th>
        <th>iamnt</th>
        <th>tp</th>
    </tr>
    <?php
        while($rjoinres=mysqli_fetch_array($rjoinquery)){
            ?>
            <tr>
                <td><?php echo $rjoinres['hplanid']?></td>
                <td><?php echo $rjoinres['plan_name']?></td>
                <td><?php echo $rjoinres['pamnt']?></td>
                <td><?php echo $rjoinres['iamnt']?></td>
                <td><?php echo $rjoinres['tp']?></td>
            </tr>

            <?php
        }
    ?>
</table>

<h1>Proceudre With cursor</h1>
<?php
        require_once 'connection.php';
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
            $sql = 'CALL procedure_cursor()';
            // call the stored procedure
            $q = $pdo->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
        ?>
        <table>
        <tr>
        <th>hplanid</th>
        <th>plan_name</th>
        <th>pamnt</th>
        <th>iamnt</th>
        <th>tp</th>
        </tr>
            
            <?php while ($r = $q->fetch()): ?>
                <tr>
                <tr>
                <td><?php echo $r['planid']?></td>
                <td><?php echo $r['plan_n']?></td>
                <td><?php echo $r['amnt']?></td>
                <td><?php echo $r['inamnt']?></td>
                <td><?php echo $r['p']?></td>
            </tr>
                </tr>
            <?php endwhile; ?>
        </table>
<table>
</body>
</html>

        