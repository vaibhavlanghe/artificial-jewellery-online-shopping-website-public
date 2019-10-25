<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php 
    require'db_connection.php';
    if(isset($_SESSION['email'])){
        header('location:home.php');
    }
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
		</style>
	</head>
	<body>
	<div class="header" style="margin:0;padding:0;">
            <?php
                include'header.php';
            ?>
		</div>
		<div class="container" style="margin:0;padding:0;width:100%;height:100%;position:relaltive;">
            <?php
                include 'home_products_jewellary.php';
            ?>
		</div>
		<div class="footer" style="">
		
            <?php
            include'footer.php';
            ?>
		</div>
	</body>
</html>