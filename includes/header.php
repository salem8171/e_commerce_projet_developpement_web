<!DOCTYPE html>

<?php
	session_start();
	include("functions/functions.php");
?>

<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content=""/>
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->

		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>

		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

  	<body>
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
			    <form method="get" action="results.php" enctype="multipart/form-data">
						<div class="row">
							<div class="container">
								<div class="row">
									<div class="span3"><input type="text" class="input-block-level search-query" name="user_query" placeholder="Search a Product"/ ></div>
									<div class="span8"><input type="submit" name="search" value="Search" ></div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="checkout.php">Checkout</a></li>
							<li><a href="customer_register.php">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu"><a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a></div>
			</section>
