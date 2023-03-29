<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./cpreg.css">
    <title>Document</title>
</head>
<body>
    <?php
    $pid=$_POST['rn'];
    $id=$_POST['id'];
    ?>
    <form action="cpregi.php" method="POST">
        <label for="n">NAME : </label>
        <input type="text" name="iname" placeholder="eg:abc" id="n">
        <label for="d">DATE OF BIRTH : </label>
        <input type="date" name="dob"  id="d"><br>
        <label for="e">EMAIL : </label>
        <input type="email" name="email" placeholder="eg:abc@gmail.com" id="e">
        <label for="p">MOBILE NUMBER : </label>
        <input type="text" name="mbno" placeholder="eg:9230478235" id="p"><br>
        <label for="pa">PROPERTY ADDRESS : </label><br>
        <textarea name="address" id="pa" cols="30" rows="10" placeholder="eg:Chandra layout,Bangalore"></textarea><br>
        <label for="ps">PROPERTY SIZE : </label>
        <input type="text" name="propsize" placeholder="eg:30X40" id="ps"><br>
        <input type="hidden" name="pid" value="<?php echo $pid ?>"><br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="SUBMIT" id="s">
    </form>
</body>
</html>