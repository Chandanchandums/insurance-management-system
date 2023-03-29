<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./cvreg.css">
    <title>Document</title>
</head>
<body>
    <?php
    $pid=$_POST['rn'];
    $id=$_POST['id'];
    ?>
    <form action="cvregi.php" method="POST">
    <label for="n">Name : </label>
        <input type="text" name="iname"  id="n">
        <label for="n">Date Of Birth : </label>
        <input type="date" name="dob"  id="d"><br>
        <label for="n">E-mail : </label>
        <input type="email" name="email"  id="e">
        <label for="n">Mobile-No : </label>
        <input type="text" name="mbno"  id="p"><br>
        <label for="n">Address : </label><br>
        <textarea name="address" id="pa" cols="30" rows="10" ></textarea><br>
        <label for="n">Vehicle-No : </label>
        <input type="text" name="vno"  id="p">
        <label for="dd">Vehicle-Type:</label>
        <select name="vtype" id="dd">
            <option value="2-Wheeler">2-Wheeler</option>
            <option value="4-Wheeler">4-Wheeler</option>
        </select><br>
        <label for="n">Vehicle Brand : </label>
        <input type="text" name="vbrand"  id="p">
        <label for="n">Registration Year : </label>
        <input type="text" name="regy"  id="p">
        <input type="hidden" name="pid" value="<?php echo $pid ?>"><br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="SUBMIT" id="s">
    </form>
</body>
</html>