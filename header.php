<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->     
<?php
    require 'db_connection.php';
?>
<html>
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
                #topNavbar,#bottomFootbar{
                        background: rgb(169,3,41);
                        background: -moz-linear-gradient(top, rgba(169,3,41,1) 0%, rgba(109,0,25,1) 60%, rgba(109,0,25,1) 60%, rgba(109,0,25,1) 100%);
                        background: -webkit-linear-gradient(top, rgba(169,3,41,1) 0%,rgba(109,0,25,1) 60%,rgba(109,0,25,1) 60%,rgba(109,0,25,1) 100%);
                        background: linear-gradient(to bottom, rgba(169,3,41,1) 0%,rgba(109,0,25,1) 60%,rgba(109,0,25,1) 60%,rgba(109,0,25,1) 100%);
                        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); 
                }
                a{
                        text-decoration: none;
                }
                #panel-footer{
                        text-align:left;
                        
                }
	</style>
    </head>
    <body>
        <!-- Top Navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="topNavbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>
                            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                           <ul class="nav navbar-nav navbar-right">
                             <?php
                            if (isset($_SESSION['u_email'])){
                            ?>
                                <li><a href="Kart.php?set=1"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                                <li><a href="imgInsert.php"><span class="glyphicon glyphicon-cloud-upload"></span>Upload Product</a></li>
                                <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                            <?php
                       
                            }else {
                            ?>
                                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                <li><a href="aboutus.php"><span class="glyphicon glyphicon-log-in"></span> About Us</a></li>
                                <li><a href="contactus.php"><span class="glyphicon glyphicon-log-in"></span> Contact Us</a></li>
                            <?php
                            }
                            ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php
                include'login.php';
            ?>
    </body>
</html>
