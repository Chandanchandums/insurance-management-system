<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./clreg.css">
    <title>Document</title>
</head>
<body>
    <?php
    $pid=$_POST['rn'];
    $id=$_POST['id'];
    ?>
    <form action="clregi.php" method="POST">
    <label for="n">NAME : </label>
        <input type="text" name="iname" id="">
        <label for="n">Date Of Birth: </label>
        <input type="date" name="dob"  id="n"><br>
        <label for="n">E-mail : </label>
        <input type="email" name="email"  id="d">
        <label for="n">Mobile-No : </label>
        <input type="text" name="mbno"  id="e"><br>
        <label for="pa">Address : </label><br>
        <textarea name="address" id="pa" cols="30" rows="10" ></textarea><br>
        <label for="n">Nominee NAME : </label>
        <input type="text" name="nname" id="ps"><br>
        <label for="n">Nominee Relation : </label>
        <input type="text" name="nrelation" id="p"><br>
        <label for="n">Nominee Contact-no : </label>
        <input type="text" name="ncontact" id="p"><br>
        <input type="hidden" name="pid" value="<?php echo $pid ?>"><br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="SUBMIT" id="s">
    </form>
</body>
</html>