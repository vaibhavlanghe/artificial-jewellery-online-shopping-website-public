<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'db_connection.php';
    if(isset($_SESSION['email'])){
        header('location:login.php');
    }
?>
<html>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> </title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		
		
		<script src="bootstrap/js/jquery2.1.1.min.js"></script>
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
                        .col-xs-12{
                                width: 100%;
                                height: auto;
                        }
                        img{
                                background:url('bootstrap/images/shopping.gif')no-repeat,center;
                                width: 100%;
                                height: auto; 
                                background-size:95% 95%,cover;
                                border-radius:10%;
                        }
                        #video{display:none}
					span{
						display:inline-block;
					}
		</style>
	<script type="text/javascript">
	//code to validate the date matching newPass and confirmPassword
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
	function resetField(){
			/*var fname = document.getElementById("txtPassword");
			var mname = document.getElementById("txtPassword");
			var mail = document.getElementById("txtPassword");
			var pass = document.getElementById("txtPassword");
			var retypepass = document.getElementById("txtPassword");
			var dob = document.getElementById("txtPassword");
			var phno = document.getElementById("txtPassword");
			var localAddr = document.getElementById("txtPassword");
			var townAddr = document.getElementById("txtPassword");
			var stateAddr = document.getElementById("txtPassword");
			var cityAddr = document.getElementById("txtPassword");
			var pinAddr = document.getElementById("txtPassword");
			*/
			document.getElementById("fName");
			document.getElementById("mName");
			document.getElementById("lName");
			document.getElementById("uEmail");
			document.getElementById("password");
			document.getElementById("confirm_password");
			document.getElementById("bDate");
			document.getElementById("mobNum");
			document.getElementById("localAdd");
			document.getElementById("townAdd");
			document.getElementById("state");
			document.getElementById("city");
			document.getElementById("pin");
			}
</script>
</head>
    <body>
	
	<!-- header without login-->
	<div class="header">
	<?php
		include 'header.php';
	?>
	</div>
	
	<!--container-->
	<div class="container" style="height:100%;width:100%;">
	
	<!-- Customer Sign up form -->
	
        <form action="signup_script.php" name="signup-form" method="POST" autocomplete="on">
            <div class="row">
			
			<!-- tablet and video played -->
                    <div class="panel panel-body col-sm-8 col-md-4 col-lg-4" id="panel-1">
                        <img src="bootstrap/images/Moto-XOOM-Blank.png" alt="Mobo.png">

                    </div>
					
			<!-- Form Fields -->
                    <div class="panel panel-body col-sm-4 col-md-8 col-lg-6" id="panel-2">
            <!-- sign up header -->        
					<div class="panel-header">
                        <center><h2>Sign UP</h2></center>
                    </div>
			<!-- Name -->
                    <div class="form-group">
					<span class="">
						<div class="">
                        <input type="text" placeholder="First Name" class="form-control" name="fName" autofocus required>
						</div>
					</span>	
					<span class="">
						<div class="">
						<input type="text" placeholder="Middle Name" class="form-control" name="mName" autofocus required>
						</div>
						</span>
						<span class="">
						<div class="">
						<input type="text" placeholder="Last Name" class="form-control" name="lName" autofocus required>
						</div>
						</span>
                    </div>
					
					<!-- Email -->
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control" name="uEmail" required>
                    </div>
			
					<!-- DOB -->
					<div class="form-group">
					<input type="date" data-date="" data-date-format="YYYY-MMM-DD" placeholder="Birth date" class="form-control" name="bDate" required>
					</div>
					
					<!-- Gender -->
					<div class="form-group">
					<input type="radio" value="Male" name="radioGender" checked required><b>&nbsp;&nbsp;Male</b>
					<input type="radio" value="Female" name="radioGender" required><b>&nbsp;&nbsp;Female</b>
					<input type="radio" value="Other" name="radioGender" required><b>&nbsp;&nbsp;Others</b>
					</div>
					
					
					<!-- customer contact -->	
                    <div class="form-group">
                        <input type="tel" placeholder="Contact" class="form-control" value="+91" maxlength="13" name="mobNum" required>
                    </div>
					<!-- address local addr,town,state,city,pin -->
					<div class="form-group">
                        <input type="text" placeholder="local address" class="form-control" name="localAdd" required>
                    </div>
					<div class="form-group">
                        <input type="text" placeholder="town" class="form-control" name="townAdd" required>
                    </div>
					<div class="form-group">
                        <input type="text" placeholder="state" class="form-control" name="state" required>
                    </div>
					<div class="form-group">
                        <input type="text" placeholder="city" class="form-control" name="city" required>
                    </div>
					
                    <div class="form-group">
                        <input type="text" placeholder="pin" class="form-control" name="pin" maxlength="6" required>
                    </div>
					
					<!-- password -->		
					<div class="checkPassword">			
					<script>
					//check newPass and retypePass is matched jQuery
					$(document).ready(function(){
						$("#txtConfirmPassword,#txtPassword").keyup(function(){
							if ($("#txtPassword").val() != $("#txtConfirmPassword").val()) {
								$("#msg").html("Password do not match").css("color","red");
								}else{
								$("#msg").html("Password matched").css("color","green");
							}
						});
					});
					</script>
                    <div class="form-group">
                        <input type="password" id="txtPassword" placeholder="Password" class="form-control input-sm" name="password" maxlength="16" autocomplete="off" required>
                    </div>
				
					<div class="form-group">
                        <input type="password" id="txtConfirmPassword" placeholder="Retype Password" class="form-control input-sm" name="confirm_password" maxlength="16" autocomplete="off" required>
                    </div>
					<div id="msg"></div>
					</div>
					
					<!-- reset and submit button -->
					<div class="formFooter">
					<span style="display:inline-box;float:left;">
					<div class="btn">
                        <input class="btn btn-primary" type="reset" value="Reset" onclick="return resetField();">
                    </div>
					</span>
					<span style="display:inline-box;float:right;">
                    <div class="btn">
                        <input class="btn btn-primary" type="submit" value="Submit" onclick="return Validate();">
                    </div>
					</span>
					</div>
                </div>
            </div>
		</div>
		
		
		<!--Footer-->
		<div class="footer">
		<?php
			include 'footer.php';
		?>
		</div>
        </form>
    </body>
</html>

