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
		<link rel="stylesheet" href="bootstrap/css/imgagehover.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
strong,price{
			color:Black;
			text-decoration:none;
		
}
strong:hover{
	color:blue;
}
strong:visited{
	color:blue;
}
strong:active{
	color:yellow;
}
</style>
	</head>
    <body>
        <form action="home_products_scirpt.php" method="GET">
<div class="header" style="position:;margin:0;padding:0;">
            <?php
                include'header.php';
            ?>
		</div>		
        <div class="container">


		<div class="row" id="bodycontent">
<div class="row text-center" style="margin:1% 1% 1% 1%;">
      
	  <!--product 1-->
	  
<?php
require 'db_connection.php';
$cat=$_GET['category'];
$query = "SELECT p.pname,p.pdescription,p.pprice,p.ptype,i.PID,i.PATH FROM products p JOIN images i WHERE p.pnumber = i.PID AND p.ptype = '$cat'";

$result = mysqli_query($conn,$query);

$num_rows= mysqli_num_rows($result);
$arr = array();
if($num_rows > 0){
//	for($i = $num_rows ; $i >= 0 ;$num_rows--){
	while(	$row = mysqli_fetch_assoc($result)){
		$arr[] = $row;	
	}
//	print_r($arr);
//	echo $arr[0]['pname'];
//	echo count($arr);
	//}
	for($i = count($arr)-1;$i >= 0; $i--){
		$pid = $arr[$i]['PID'];
		$pname = $arr[$i]['pname'];
		$pprice = $arr[$i]['pprice'];
		$path = $arr[$i]['PATH'];
		
		$dynamicList='<div class="col-xl-3 col-sm-3 col-md-3 col-xs-12">
			<div class="thumbnail"><a href="order.php?id='.$pid.'" id="link1">
          <img src="'.$path.'" alt="image error" >
          <p class="productName"><strong>'.$pname.'</strong></p>
          </a><p class="price">'.$pprice.'</p>
          <button class="btn">Buy Now</button>
			</div>
			</div>
		';
		echo $dynamicList;
	}
}
	
?>
      <!--  <div></div>-->
     
    </div>
  </div>
</div>
</div>
		<div class="footer" style="">
		
            <?php
            include'footer.php';
            ?>
		</div>

</html>
