<!doctype html>
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
	</head>
	<body>
	
	<!-- header without login-->
	<div class="header" >
	<?php
		include 'header.php';
	?>
	</div>
	
	<!--container-->
	<div class="container" style="height:100%;width:100%;margin-left:10%;">
	
	<!-- Customer Sign up form -->
	
	<form action="imgInsert_script.php" method="POST" name="product-form" enctype="multipart/form-data">
		<div class="row">
		                    <div class="panel panel-body col-sm-8 col-md-4 col-lg-4" id="panel-1">
</div>
                    <div class="panel panel-body col-sm-4 col-md-8 col-lg-6" id="panel-2">

			<center><h2 style="align:center;margin-top:5%">Add Product</h2></center>
			<table class="table" style="align:center;width:100%l">
			<!--choose file -->
			<tr>
			<td><label>Image</label></td>
			<td><label>:</label></td>
			<td><label><input type="file" name="img" id="imgToInsert" required /></label></td>
			</tr>

			<!--select the folder-->
			<tr>
			<td><label>Path:</label></td>
			<td><label>:</label></td>
			<td>
			<select name="folders">
			<option value="nonCategory" selected>select</option>
			<option value="necklace">necklace</option>
			<option value="bangles">bangles</option>
			<option value="earrings">earrings</option>
			<option value="rings">rings</option>
			</select>
			</td>
			</tr>
			
			<tr>
			<td><label>Name</label></td>
			<td><label>:</label></td>
			<td><label><input type="text" name="txtPname" id="pName" required /></label></td>
			</tr>
			
			<tr>
			<td><label>Description</label></td>
			<td><label>:</label></td>
			<td><label><textarea rows="4" cols="20" name="txtPdescription" id="pDesc" required ></textarea></label></td>
			</tr>
			
			<tr>
			<td><label>Price</label></td>
			<td><label>:</label></td>
			<td><label><input type="number" name="txtPprice" id="pPrice" required /></label></td>
			</tr>
			
			<!--submit -->
			<tr>
			<td><label></label></td>
			<td><label></label></td>
			<td style="padding-top:10%;"><label><input class="btn btn-primary" type="submit" name="btnSave" value="save" onClick="" required /></label></td>
			</tr>
			
			</table>
</div>		
	</div>
	</form>
	</div>
	
</body>

</html>