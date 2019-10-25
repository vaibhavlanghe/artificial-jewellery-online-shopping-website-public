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
                                background:url('bootstrap/videos/shopping.mp4')no-repeat,center;
                                width: 100%;
                                height: auto; 
                                background-size:95% 95%,cover;
                                border-radius:10%;
                        }
                        #heading{
                                padding-top:5%;
                                padding-bottom:5%;
                        }
                        ul{
                                color:blue;
                        }
		</style>
	</head>
    <body>
	
	<div class="header">
		<?php
			include 'header.php';
		?>
	</div>
        <div class="container">
            <div id="heading">
                <center><h3>Products and Services</h3></center>
            </div>
            <div class="row">   
                <div class="col-md-4 col-lg-4">
                    <img src="bootstrap/images/amazon.jpg" alt="Amazon"/>
                    <p><br><br><pre>Amazon.com's</pre> product lines available at its website include several media (books, DVDs, music CDs, videotapes and software), apparel, baby products, consumer electronics, beauty products, gourmet food, groceries, health and personal-care items, industrial & scientific supplies, kitchen items, jewelry, watches, lawn and garden items, musical instruments, sporting goods, tools, automotive items and toys & games.[citation needed]

In India, Amazon is now gearing up to play a role in the grocery retail sector aimed at delivering customer needs.[66]

Amazon.com has a number of products and services available, including:[citation needed]
</p>
                </div>
                <div class="col-md-4 col-lg-4">
                    <ul>
                        <li>AmazonFresh</li>
                        <li>Amazon Prime</li>
                        <li>Amazon Web Services</li>
                        <li>Alexa
                        <li>Appstore
                        <li>Amazon Drive</li>
                        <li>Echo</li>
                        <li>Kindle</li>
                        <li>Fire tablets</li>
                        <li>Fire TV</li>
                        <li>Video</li>
                        <li>Kindle Store</li>
                        <li>Music</li>
                        <li>Music Unlimited</li>
                        <li>Amazon Digital Game Store</li>
                        <li>Amazon Studios</li>
                        <li>AmazonWireless</li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-4">
                    <p> <strong>Sales and use taxes:</strong></p>
                    <p>Main article: Amazon tax
Amazon state sales tax collection policy has changed over the years since in the company's beginning it did not collect any sale taxes. In the U.S., state and local sales taxes are levied by state and local governments, not at the federal level. In most countries where Amazon operates, a sales tax or value added tax is uniform throughout the country, and Amazon is obliged to collect it from all customers. Proponents of forcing Amazon.com to collect sales tax—at least in states where it maintains a physical presence—argue the corporation wields an anti-competitive advantage over storefront businesses forced to collect sales tax.[120]
Many U.S. states in the 21st century have passed online shopping sales tax laws designed to compel Amazon.com and other e-commerce retailers to collect state and local sales taxes from its customers. Amazon.com originally collected sales tax only from five states as of 2011, but as of April 2017 collects sales taxes from customers in all 45 states that have a state sales tax and in Washington, D.C.[121]
Amazon does not collect sales taxes from Alaska, Delaware, Montana, New Hampshire and Oregon since those states do not have state sales taxes.[citation needed]</p>
                </div>
            </div>
        </div>
		
		<div class="footer">
			<?php
				include 'footer.php';
			?>
		</div>
    </body>
</html>
