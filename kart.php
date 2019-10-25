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
		<title> </title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap/imagehover/css/imagehover.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<style>
		/*navigation bar*/
		ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover{
	background-color:#FFFFFF;
}


		.col-xs-12{
			width:100%;
			position:relative;
		}
		.container {
			width:100%;
			margin:1% 0 1% 0;
		}
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
}
.navLi:hover{
		background-color:white;
}
		</style>
		<script>
function goBackPrevious() {
  window.history.back();
}
</script>
</head>
		<body>
		<!------ Include the above in your HEAD tag ---------->
<div class="header">
<div class="navbar navbar-fixed-top">		
<div class="h3" style="margin:0;padding:0;">
<ul>
 <li class="navLi" style="float:left;background:cover;width:5%;height:40px;"><button type="button" onClick="goBackPrevious()" class="btn btn-default btn-lg" style="padding:;margin-top:;width:100%;color:#F8D43F;background-color: Transparent;
    background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;" ><span class="glyphicon glyphicon-arrow-left "area-hidden="true" ></span></button></a></li>
</ul></div>
</div>
</div>
			
<!-- Cart Container design-->
<div class="container" style="margin-top:5%;">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						
									<?php 	
									if(isset($_GET['id'])){
										$pid = $_GET['id'];
							
										//getting product and image details from database
										$query = "SELECT p.pname,p.ptype,p.pdescription,p.pprice,i.PATH FROM products p JOIN images i WHERE i.PID = $pid AND p.pnumber = $pid ";
										$result = mysqli_query($conn,$query)or die ("server down");
										$row = mysqli_fetch_assoc($result);
										$src = $row['PATH'];
										$title = $row['pname'];
										$description = $row['pdescription'];
										$price = $row['pprice'];
										$ptype = $row['ptype'];
										$u_mail = $_SESSION['u_email'];
										//echo $u_mail;
										
										//getting user id from database
										$query1 = "SELECT u_id FROM users WHERE u_email='$u_mail'";
										$result1 = mysqli_query($conn,$query1);
										$row1 = mysqli_fetch_assoc($result1);
										//echo $row1['u_id'];
										$u_id = $row1['u_id'];
										
									/*			//insert data required to cart along with the user and product id
												$query2 = "INSERT INTO cart(CARTID,PTYPE,PRICE,QUANTITY,TOTAL,BUY_STATUS,PID,CID)VALUES(NULL,'$ptype','$price','0','0','UNSUCCESSFUL','$pid','$u_id')";
												mysqli_query($conn,$query2) or die("data not inserted into cart!!!");
												
									*/$u_mail = $_SESSION['u_email'];
												//getting user id from database
												$query1 = "SELECT u_id FROM users WHERE u_email='$u_mail'";
												$result1 = mysqli_query($conn,$query1);
												$row1 = mysqli_fetch_assoc($result1);
												//echo $row1['u_id'];
												$u_id = $row1['u_id'];
									
												//echo '';
																		//getting all cart data for particular customer from database
																		$query3 = "SELECT c.CARTID,c.PTYPE,c.PRICE,i.PATH,c.PID FROM cart c JOIN images i WHERE c.PID = i.PID and c.CID = $u_id";
																		$result3 = mysqli_query($conn,$query3);
																		$num_rows = mysqli_num_rows($result3);
																		$arr = array();
																		if($num_rows > 0){
																			while($row = mysqli_fetch_assoc($result3)){
																				//echo $num_rows;
																				$arr[] = $row;
																			}
																		}
																		//echo count($arr);
																		for($i = count($arr)-1; $i >= 0; $i--){
																			$cartId = $arr[$i]['CARTID'];
																			$ptype = $arr[$i]['PTYPE'];
																			$price = $arr[$i]['PRICE'];
																			$path = $arr[$i]['PATH'];
																			$pid = $arr[$i]['PID'];
																			//getting product and image details from database
																			$query = "SELECT p.pname,p.ptype,p.pdescription,p.pprice,i.PATH FROM products p JOIN images i WHERE i.PID = $pid AND p.pnumber = $pid ";
																			$result = mysqli_query($conn,$query)or die ("server down");
																			$row = mysqli_fetch_assoc($result);
																			$src = $row['PATH'];
																			$title = $row['pname'];
																			$description = $row['pdescription'];
																			$price = $row['pprice'];
																			$ptype = $row['ptype'];
																			
																			//echo $u_mail;
												
																			$list = '<tr>
																			<!-- products list content -->
																			<td data-th="Product">
																			<div class="row">
																				<div class="col-sm-2 hidden-xs"><img src="'.$src.'" alt="Error" class="img-responsive"/></div>
																					<div class="col-sm-10">
																						<h4 class="nomargin">'.$ptype.'</h4>
																						<p>'.$title.'</p>
																					</div>
																				</div>
																			</td>
																			<td data-th="Price"><strong>Rs. </strong>'.$price.'</td>
																			<td data-th="Quantity">
																		<input type="number" id="productQuantity" class="form-control text-center" id="productQuantity" value="1" min="1">
																			</td>
																		<td data-th="Subtotal" class="text-center" id=""><strong>Rs. </strong><p id="subTotal">'.$price.'</p></td>
																		
																		<script>
																		$(document).on("change","#productQuantity", function(){
																			var sum=0;
																			$("#productQuantity").each(function(){
																				if($(this).val() > 0){
																				  sum = '.$price.' * parseInt($(this).val(), 10);   
																				}else{
																					sum = 0;
																				}
																			});
																		
																			$("#subTotal").html(sum);
																		});
																		</script>
												
																		<td class="actions" data-th="">
																						
																			<!-- remove product from cart button -->
																				<!--	<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i>Update</button>	-->
																				<form action="cart_remove.php?id='.$cartId.'" method="POST">
																					<input type="submit" class="btn btn-danger btn-sm" name="submit" value="Remove"/>								
																				</form>
																			</td>
																		</tr>
																		';
																echo $list;
												}						
												
										
									//	echo $src;
									//	echo $_GET['pname'];
						}else{															
							if((isset($_GET['set']))){

								$u_mail = $_SESSION['u_email'];
							//getting user id from database
							$query1 = "SELECT u_id FROM users WHERE u_email='$u_mail'";
							$result1 = mysqli_query($conn,$query1);
							$row1 = mysqli_fetch_assoc($result1);
							//echo $row1['u_id'];
							$u_id = $row1['u_id'];
				
							echo '';
							//getting all cart data for particular customer from database
							$query3 = "SELECT c.CARTID,c.PTYPE,c.PRICE,i.PATH,c.PID FROM cart c JOIN images i WHERE c.PID = i.PID and c.CID = $u_id";
							$result3 = mysqli_query($conn,$query3);
							$num_rows = mysqli_num_rows($result3);
							$arr = array();
							if($num_rows > 0){
							while($row = mysqli_fetch_assoc($result3)){
								//echo $num_rows;
								$arr[] = $row;
							}
						}
							//echo count($arr);
							for($i = count($arr)-1; $i >= 0; $i--){
							$cartId = $arr[$i]['CARTID'];
							$ptype = $arr[$i]['PTYPE'];
							$price = $arr[$i]['PRICE'];
							$path = $arr[$i]['PATH'];
							$pid = $arr[$i]['PID'];

							$priceArr[] = $arr[$i]['PRICE'];
							//getting product and image details from database
							$query = "SELECT p.pname,p.ptype,p.pdescription,p.pprice,i.PATH FROM products p JOIN images i WHERE i.PID = $pid AND p.pnumber = $pid ";
							$result = mysqli_query($conn,$query)or die ("server down");
							$row = mysqli_fetch_assoc($result);
							$src = $row['PATH'];
							$title = $row['pname'];
							$description = $row['pdescription'];
							$price = $row['pprice'];
							$ptype = $row['ptype'];
							
							//echo $u_mail;
							$list = '<tr>
							<!-- products list content -->
							<td data-th="Product">
							<div class="row">
								<div class="col-sm-2 hidden-xs"><img src="'.$src.'" alt="Error" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">'.$ptype.'</h4>
										<p>'.$title.'</p>
									</div>
								</div>
							</td>
							<td data-th="Price"><strong>Rs. </strong>'.$price.'</td>
							<td data-th="Quantity">
						<input type="number" id="productQuantity" class="form-control text-center" id="productQuantity" value="1" min="1">
							</td>
						<td data-th="Subtotal" class="text-center" id=""><strong>Rs. </strong><p id="subTotal">'.$arr[$i]['PRICE'].'</p></td>
						
						<script>
						$(document).on("change","#productQuantity", function(){
							var sum=0;
							$("#productQuantity").each(function(){
								if($(this).val() > 0){
								  sum = '.$arr[$cartId]['PRICE'].' * parseInt($(this).val(), 10);   
								}else{
									sum = 0;
								}
							});
						
							$("#subTotal").html(sum);
						});
						</script>

						<td class="actions" data-th="">
										
							<!-- remove product from cart button -->
								<!--	<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i>Update</button>	-->
								<form action="cart_remove.php?id='.$cartId.'" method="POST">
									<input type="submit" class="btn btn-danger btn-sm" name="submit" value="Remove"/>								
								</form>
							</td>
						</tr>
						';
				
							
							echo $list;
							
							}						
				
						}
						
					}
					
						?>
									
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><button type="button" class="btn btn-warning btn-lg btn-block" style="margin-top:1%;padding:1%;width:30%;" onClick="goBack();" name="btnBack2pgs">Continue Shopping</button></td>
							<script>
							function goBack(){
								window.history.go(-2);
							}
							</script>
							<td colspan="2" class="hidden-xs"></td>
							<?php '<td class="hidden-xs text-center" ><strong>Total Rs.<p id="subTotal">'.$price.'</p></strong></td>'; ?>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>

					<?php
						
					?>
				</table>
</div>
<div class="footer">

</div>