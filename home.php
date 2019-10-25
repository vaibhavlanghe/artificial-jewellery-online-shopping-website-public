<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'db_connection.php';
    //if(!isset($_SESSION['u_email'])){
      //  header('location:index.php');
    //}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> </title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<style>
		a{
			color:black;
			text-decoration:none;
		}
		a:hover{
			color:white;
			text-decoration:none;
		}
                #bodycontent{
                        margin-top:6%;
                        
                }
		#button{
			color:#fff;
			background-color:#c9302c;
			border-color:#ac2925;
			box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);
			padding:10px 16px;
			border-radius:6px;
		}
		center{
                        margin-bottom:2%;
                }
                #panel-heading{
                        text-align:center;
                }
                
                a{
                        text-decoration: none;
                }
		</style>
	</head>
	<body>
            <?php
                include'header.php';
            ?>
            <?php
                include 'home_products_jewellary.php';
            ?>
            <?php
                include'footer.php';
            ?>
	</body>
</html>