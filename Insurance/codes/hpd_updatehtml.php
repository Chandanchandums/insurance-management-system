<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./hpd_insert.css">
    <title>Document</title>
</head>
<?php
include('connection.php');
$pname=$_POST['pname'];
$pamnt=$_POST['pamnt'];
$iamnt=$_POST['iamnt'];
$tp=$_POST['tp'];
$hplanid=$_POST['hplanid']
?>
<body>
   <div class="form-content">
       <h1></h1>
       <form action="./hpd_update.php" method="POST">
       <label for="">PLAN NAME:</label>
       <input type="text" name="pname" id="n" value="<?php echo $pname;?>">
       <label for="">PLAN PRICE:</label>
       <input type="text" name="pamnt" id="d" value="<?php echo $pamnt;?>"><br>
       <label for="">SUM INSURED AMOUNT:</label>
       <input type="text" name="iamnt"  id="e" value="<?php echo $iamnt;?>">
       <label for="">TIME PERIOD:</label>
       <input type="text" name="tp"  id="p" value="<?php echo $tp;?>"><br>
       <input type="hidden" name="hplanid"  id="hid" value="<?php echo $hplanid;?>"><br>
       <input type="SUBMIT" value="SUBMIT" id="s">
    </form>
   </div> 
</body>
</html>