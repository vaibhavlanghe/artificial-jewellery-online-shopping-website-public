<!DOCTYPE html>
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
		#signupLink:hover{
			color:blue;
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
        <form action="login_script.php" method="post" >
        <div class="container">
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="panel-heading" id="panel-heading">
                                <h3>Login</h3>
                            </div>
                        </div>
                        <div class="modal-body">
                           
                                <div class="panel-body">
                                    <p class="text-warning">Login to make a purchase</p>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password" name="password">
                                    </div>
                                </div>
                                    <center><button type="submit" id="btn1" class="btn btn-primary" name="submit">Submit</button></center>
                                
                            </div>
                            <div class="modal-footer">
                                <div id="panel-footer">
                                    <span>Don't have an account?<a id="signupLink" href="signup.php"> Register</a></span>
									<span><a id="signupLink" href="forgotlink.php">Forgot </a> Password?</span>
                                </div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
