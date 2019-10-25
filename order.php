<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'db_connection.php';
/*if(!(isset($_SESSION['u_email']))){
	echo "<script>alert('Session is expired!!!\nLgoin again...');</script>";
	header('location:home.php');
}*/
?>
<html>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> </title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		
		<!--image zoom files-->
		<!--<link rel="stylesheet" href="bootstrap/style.css">-->
		

		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	<style>
/*navigation bar*/
		/*navigation bar*/
		ul.navUl {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li.navLi {
  float: left;
  border-right:1px solid #bbb;
}

li.navLi:last-child {
  border-right: none;
}

li.navLi a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li.navLi a:hover{
	background-color:#FFFFFF;
}

/*zoom origional image*/
.clearfix { zoom: 1; }

.clearfix:after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}

.bzoom { direction: ltr; }

.bzoom,
.bzoom_thumb,
.bzoom_thumb_image,
.bzoom_big_image,
.bzoom_zoom_preview,
.bzoom_icon,
.bzoom_hint { display: none }

.bzoom .bzoom_thumb { background:; }

.bzoom,
.bzoom ul,
.bzoom li,
.bzoom img,
.bzoom_hint,
.bzoom_icon,
.bzoom_description {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
}

.bzoom,
.bzoom_magnifier div,
.bzoom_magnifier div img,
.bzoom_small_thumbs ul,
ul .bzoom_small_thumbs li,
.bzoom_zoom_area div,
.bzoom_zoom_img { position: relative }

.bzoom img,
.bzoom li {
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -o-user-select: none;
  user-select: none;
  -webkit-user-drag: none;
  -moz-user-drag: none;
  user-drag: none
}

.bzoom,
.bzoom_small_thumbs li { float: left }

.bzoom_right { float: right }

.bzoom li { position: absolute }

.bzoom img {
  vertical-align: bottom;
  width: 50px;
  height: 50px
}

.bzoom .bzoom_zoom_area,
.bzoom_zoom_area {
  background: #fff url(./img/loading.gif) center no-repeat;
  border: 1px solid #ddd;
  padding: 6px;
  -webkit-box-shadow: 0 0 10px #ddd;
  -moz-box-shadow: 0 0 10px #ddd;
  box-shadow: 0 0 10px #ddd;
  display: none;
  z-index: 20;
}

.bzoom_zoom_area div { overflow: hidden; }

.bzoom_zoom_area .bzoom_zoom_img { position: relative; }

.bzoom_wrap .bzoom_magnifier {
  background: #fff;
  outline: #bbb solid 1px;
  display: none;
  cursor: move;
}

.bzoom_magnifier div { overflow: hidden; }

.bzoom_wrap .bzoom_small_thumbs { overflow: hidden; }

.bzoom_wrap .bzoom_small_thumbs li {
  border: 1px solid #FFF;
  margin: 0px 10px 0px 0px;
  position: static;
}

.bzoom_wrap ul li.bzoom_smallthumb_active {
  -webkit-box-shadow: 0 0 10px #ddd;
  -moz-box-shadow: 0 0 10px #ddd;
  box-shadow: 0 0 10px #ddd;
  border: 1px solid #535353;
}
.backBtn:hover
{
background-image:none !important;
background-color:#ffffff	 !important;
}
.navLi:hover{
	background-color:white;
}

	</style>
	<script>
function goBack() {
  window.history.back();
}
</script>
</head>
<body>
	
	<!--header-->
	<div class="header" style="position:static;">
		<div class="navbar navbar-fixed-top">		
			<div class="h1" style="margin:0;padding:0;">
				<ul class="navUl">
					<li class="navLi" style="float:left;background:cover;width:5%;height:40px;"><button type="button" onClick="goBack()" class="btn btn-default btn-lg" style="padding:;margin-top:;width:100%;color:#F8D43F;background-color: Transparent;
					background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;" ><span class="glyphicon glyphicon-arrow-left "area-hidden="true" ></span></button></a></li>	
				</ul>
			</div>
		</div>
	</div>

	<!--product image and product data from database -->
	<div class="container col-lg-12 col-md-12 col-sm-12">
        <div class="topLeft" style="float:left;margin-top:4%;width:95%;padding:1% 0.5% 1% 0.5%;">
            <div id="heading">
  
            </div>
            <div class="row col-lg-4 col-md-4 col-sm-12" style="float:left;width:100%;height:100%;position:fixed-top">   
				<div class="bzoom_wrap" >
					<ul id="bzoom">		
						<?php
						
						if(isset($_GET['id'])){
						$pid = $_GET['id'];
						$query = "SELECT p.pname,p.pdescription,p.pprice,i.PATH FROM products p JOIN images i WHERE i.PID = $pid AND p.pnumber = $pid ";
						$result = mysqli_query($conn,$query)or die ("server down");
						$row = mysqli_fetch_assoc($result);
						$src = $row['PATH'];
						$title = $row['pname'];
						$description = $row['pdescription'];
						$price = $row['pprice'];
						//echo $pid.$title.$price;
						$imgInfo= '<li>
							<img class="bzoom_thumb_image" src="'.$src.'" title="'.$title.'" style="height:150px;width=150px;"/>
							<img class="bzoom_big_image" src="'.$src.'" style="height:150px;width=150px;"/>
					   </li>';
					   echo $imgInfo;
					
					}
					?>	
		
				</div>	
			</div>	
			
		</div>	
		<!-- product title and the price -->
		<div class="col-lg-8 col-md-8 col-sm-12" style="float:right;margin-left:0;">
			<?php
			echo '<pre style="background:none;border:none;font-size:24px;"><strong>'.$title.'</strong><strong><br>'.$price.'</strong></pre>';
			?>
			</div>
		<!--jquery and javascript for zoom image-->
		<script type="text/javascript" src="bootstrap/js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="bootstrap/js/jqzoom.js"></script>

		<script type="text/javascript">
			$("#bzoom").zoom({
				zoom_area_width: 400,
				autoplay_interval :1000,
				small_thumbs : 0,
				autoplay : false
			});
		</script>
		
		<!-- order description -->
		<div class="content col-md-8 col-lg-8 col-sm-12" style="height:100%; float:right;margin-top:;">
			<div class="col-md-8 col-lg-8 col-sm-12" style="height:100%;margin:0;">
			
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 " style="height:100%;margin:0;">
				<h5><strong>Description:</strong></h5>
				<p>
					<?php
					echo $description;
					?>
				</p>
			</div>
			
			<!-- add to cart and buy now buttons -->
				<div class="col-md-3 col-lg-3 col-sm-6 " style="height:100%;margin:0;">
				    <div class="row">
						<div class="col-md-12 col-lg-12 col-sm-12">
						
						<?php
						// echo '<center><a href="kart.php?id='.$pid.'type=addtocart" name="cartInsert" style="text-decoration:none;"><button type="button" class="btn btn-warning btn-lg btn-block" name="" formaction=""  style="margin-top:10%;" ><strong>Add to Cart</strong></button></center>';
						echo '<form action="kart_script.php?id='.$pid.'" method="POST"><center><input type="submit" class="btn btn-warning btn-lg btn-block" style="margin-top:10%;" name="submit" value="Add to cart"/></center></form>';
						?>						 
						</div>
						
						<form action='' method='POST'>
						<div class="col-md-12 col-lg-12 col-sm-12">
							<center><button type="button" class="btn btn-warning btn-lg btn-block" style="margin-top:10%;"><strong>Buy Now</strong></button></input>
						</div>
						</form>
					</div>
				</div>
			
			
		</div>
	</div>
 </body>
</html>
