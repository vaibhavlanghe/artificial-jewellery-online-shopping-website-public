<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> </title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style> 
                        a{
				color:black;
				text-decoration:none;
			}
			a:hover{
				color:white;
				text-decoration:none;
			}
			#bodyContent{
				margin-top:3%;
                        }
			#btn1{
				margin-left:5%;
				margin-bottom:2%;
			}
			footer{
				padding:10px 0;
				background-color:#101010;
				color:#9d9d9d;
				bottom:0;
				width:100%;
			}
                        #panel-1{
                                padding:4% 0 10% 10%;
                        }
                        #panel-2{
                                padding:2% 5% 0 2%;
                        }
                        #jumbotron1{
                                margin-left:5%;
                                padding-left:10%;
                        }
		</style>
	</head>
    <body>
	<div class="header" style="position:static;margin:0;padding:0;">
		<?php
			include 'header.php';
		?>
	</div>
	<div class="container" style="margin:1% 0 0 0;padding:0;width=100%;height:auto;">
        <form action="contactus_script.php" method="post">
            <div class="row">
                <div class="panel panel-body col-sm-4 col-md-4 col-lg-4" id="panel-1">
                    <div class="panel-header">
                        <center><h2>Contact Us</h2></center>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter full name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter user email id" reqired>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="subject">Mail Subject:</label>
                        <input type="subject" class="form-control" name="subject" reqired>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" rows="4" cols="50" name="message" required>
                        
                        </textarea>
                    </div>
                    <div class="btn">
                        <input class="btn btn-primary" type="submit" id="send" value="send" name="send">
                    </div>
                </div>
                <div class="panel panel-body col-sm-8 col-md-8 col-lg-8" id="panel-2">
                    <div class="jumbotron" id="jumbotron1">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="bootstrap/images/contact-us.jpg" alt="contact-us">
                                    </div>
                                   <div class="item">
                                        <img src="bootstrap/images/contactus2.jpg" alt="contact-us">
                                    </div>
                                    <div class="item">
                                        <img src="bootstrap/images/contactus3.png" alt="contact-us">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>    
        </form>
        </div>
		</div>
		
		<div class="footer" style="margin:0;padding:0;width:100%;">
			<?php
				include 'footer.php';
			?>
		</div>
    </body>
</html>
