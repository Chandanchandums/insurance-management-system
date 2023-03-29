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

            
        </div>
    </nav>
<?php include('connection.php');?>
<?php
$insert = false;
if(isset($_POST['query'])){

    // Collect post variables
    $query = $_POST['query'];

    $sql = "$query;";
    // echo $sql;
    $res = mysqli_query($con,$sql);
    // Execute the query
    if($con->query($sql) == true){;
        echo("<table class='container' style=width:60%>");
        $first_row = true;
        while ($row = mysqli_fetch_assoc($res)) {
        if ($first_row) {
            $first_row = false;
            // Output header row from keys.
            echo '<tr class="tbl-header"">';
            foreach($row as $key => $field) {
                echo '<th style=padding:10px>' . htmlspecialchars($key) . '</th>';
            }
            echo '</tr>';
        }
    echo '<tr class="tbl-row">';
    foreach($row as $key => $field) {
        echo '<td style=padding:10px>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
echo("</table>");
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        $_SESSION['add'] = "Query Failure";
        header("location:",SITEURL.'QueryBox.php');
    }
    
    // Close the database connection
    $con->close();
}
?>

<link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
    <?php include "style.css" ?> 
    <?php include "Pages/All.css" ?> 

        .container{
        max-width: 80%; 
        padding: 34px; 
        margin: auto;
        }
		.nav_bar a{
		color: black;
		text-decoration: none;
		padding: 25px 10px;
		}
		.nav_bar a:hover{
		color: rgb(0, 138, 251);
		text-decoration: none;
		}
		.nav_bar{
			margin-top: 30px;
    		font-size: 0px;
		}
		.nav_bar a:hover{
		color: rgb(0, 138, 251);
		}
		header{
    	margin-top: -20px;
    	background-color: black;
    	height: 100px;
		}
		.left img{
		width: 100px;
		}
		.left{
		display: inline-block;
		left: 10px;
		top: 10px;
		position: absolute;
		}

	.left div{
		text-align: center;
		line-height: 15px;
		font-size: 20px;
	}
	.right{
	display: block;
	margin: 10px auto;
	}
	.btnSub{
    color: white;
    background: #cd5c5c;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 10px;
    cursor: pointer;
	}
	


.imgC {
  /* The image used */
  /* Full height */
	width:50%;
	margin-right: 0px;
    margin-left: 700px;
}

header{
    margin-top: -10px;
    background-color: transparent;
    height: 100px;
}
.leftContainer{
	width: 1000px;
}
a{
    text-decoration: none;
    
}
</style>
<!-- <div class="container" style="float:left; width:50%; "> -->

<div class="container">
        <h1>Query Box</h1>
        <p>SQL query</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
        ?>
        <form action="SelectQueryBox.php" method="post">
            <textarea id="query" name="query" rows="5" cols="50">
            </textarea>
            <button class="submitBtn">Submit</button> 
            <br/>
        </form>
    </div>
    <!-- <div style="float:right; width:50%;margin-top:150px">
		<img style="width:100%" src="images/emp.jpg" />
	</div> -->
</div>