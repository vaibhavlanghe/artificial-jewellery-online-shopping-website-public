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
		<link rel="stylesheet" href="bootstrap/imagehover/css/imagehover.css">
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
		#button{
			color:#fff;
			background-color:#c9302c;
			border-color:#ac2925;
			box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);
			padding:10px 16px;
			border-radius:6px;
		}
		center{
                        margin-bottom:2%;
                }
                #panel-heading{
                        text-align:center;
                }
                
                a{
                        text-decoration: none;
                }
				
				/* Container needed to position the overlay. Adjust the width as needed */
.container {
  position: relative;
  margin:0px;
  width: 100%;
}
/* The flip box container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-box-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-box-back {
  background-color: Purple;
  color: white;
  transform: rotateY(180deg);
}
.float-left {
		float:left;
		left:10px;
}
img.one{
width:1500px;
height:300px;
}
		</style>
	</head>
    <body>
            <div class="container" style="margin-top:0;padding:0;width:100%;">
            	<div class="" id="">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="home products img/img2.jpg" alt="img2.jpg">
                            </div>
                            <div class="item">
                                <img class="one" src="home products img/img.jpg" alt="img.jpg">
                            </div>
                            <div class="item">
                                <img src="home products img/img3.jpg" alt="img3.jpg">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
		</div><br><br>
		<div class="row">
        <form action="home_products_scirpt.php" method="GET">
                   
			<div class="col-sm-3 col-sm-6 col-xl-12" id="float-left">
<a target="_self" href="p_necklace.php?category=necklace">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="home products img/neck4.jpg" alt="Necklace" style="width:100%;height:100%">
    </div>
    <div class="flip-box-back">
      <h2>Necklace</h2>
      <p>Elegance you can wear</p>
    </div>
  </div>
</div>  </a>
</div>

<div class="col-sm-3 col-sm-6 col-xl-12" id="float-left">
<!--<a target="_self" href="p_ring.php?category=rings">-->
<a target="_self" href="p_ring.php?category=rings">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="home products img/ring.jpg" alt="Rings" style="width:100%;height:100%">
    </div>
    <div class="flip-box-back">
      <h2>Rings</h2>
      <p>Mesmerize you</p>
    </div>
  </div>
</div>  </a>
</div>

<div class="col-sm-3 col-sm-6 col-xl-12" id="float-left">
<!--<a target="_self" href="p_earings.php">-->
<a target="_self" href="p_earings.php?category=earings">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="home products img/ear.jpg" alt="Earrings" style="width:100%;height:100%">
    </div>
    <div class="flip-box-back">
      <h2>Earrings</h2>
      <p>Get your sparkle one</p>
    </div>
  </div>
</div>  </a>
</div>

<div class="col-sm-3 col-sm-6 col-xl-12" id="float-left">
<a target="_self" href="p_bangle.php?category=bangles">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="home products img/bangle.jpg" alt="Bangles" style="width:100%;height:100%">
    </div>
    <div class="flip-box-back">
      <h2>Bangles</h2>
      <p>Wearable brilliance</p>
    </div>
  </div>
</div></a>  
</div>

</div>


</div>
</div>
			
            </form>
    </body>
</html>
