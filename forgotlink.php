<?php
    require'db_connection.php';
   

?>
<!DOCTYPE html>
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
			footer{
				padding:10px 0;
				background-color:#101010;
				color:#9d9d9d;
				bottom:0;
				width:100%;
			}
			#bodyContent{
				width:50%;
				margin-top:15%;	
				margin-bottom:10%;	
			}
		</style>
	</head>
	<body>
            <?php include 'header.php';?>
            <form action="settings_script.php" method="POST">
                <div class="container" id="bodyContent">
                    <div class="panel-header">
                        <center><h1>Change Password</h1></center>
                    </div>
                    <div class="form-group col-xs">
                        <input type="email" placeholder="Enter registered mail id" class="form-control" name="u_email" required>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit" name="change">send link</button>
                    
                </div>
            </form>
            <?php include'footer.php';?>
	</body>
</html>