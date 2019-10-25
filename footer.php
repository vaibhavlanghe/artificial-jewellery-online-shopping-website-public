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
		footer{
                        margin-top:2%;
			padding:10px 0;
			background-color:#101010;
			color:#9d9d9d;
			bottom:0;
			width:100%;
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
		</style>
	</head>
    <body>
        <form action="footer_script.php" method="get">
        <footer class=" navbar-auto-bottom" id="bottomFootbar">
            <div class="container">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <h4>Information<h4>
                        <h6><a href="aboutus.php" style="color: inherit;">About Us</a></h6>
                        <h6><a href="contactus.php" style="color: inherit;">Contact Us</a></h6>        
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <center><h4>Designed By<h4></center>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<ul>
						<li>Mr.Vaibhav Langhe</li>
						<li>Mr.Aditya Mohite</li>
						</ul>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<ul>
						<li>Ms.Deepti Chavan</li>
						<li>Ms.Sheetal Dhavale</li>
						</ul>
						</div>
						         
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <center><h4>Technical Support<h4>
                        <h6>contact: +91 2222 3456 00</h6></center>
                    </div>
                </div>	
        </footer>
        
    </body>
</html>
