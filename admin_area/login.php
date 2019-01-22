

<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
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
					<form method="POST" class="search_form">
					
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#"></a></li>
							<li><a href="cart.html"></a></li>
							<li><a href="checkout.html"></a></li>					
							<li><a href="register.html"></a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
		
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>


<div class="login">
<h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin']; ?></h2>

<h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
	
		<div class="span3"></div> <h1>Admin Login</h1>
    <form method="post" action="login.php">
   	<div class="span4"><div></div></div><div class="span7"><input type="text" name="email" placeholder="Email" required="required" /> </div>
     <div class="span4"> </div><div class="span7">  <input type="password" name="password" placeholder="Password" required="required" /></div>
     <br/>     <br/>     <br/>
     <div class="span5"></div> <div class="span3"><button type="submit" class="btn btn-primary btn-block btn-large" name="login" >Login</button></div>
    </form>
</div>


</body>
</html>
<?php 

include("includes/db.php"); 
	
	if(isset($_POST['login'])){
	
		// $email = mysql_real_escape_string($_POST['email']);
		// $pass = mysql_real_escape_string($_POST['password']);
		$email = $_POST['email'];
		$pass = $_POST['password'];
	
	$sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
	
	$run_user = mysqli_query($con, $sel_user); 
	
	 $check_user = mysqli_num_rows($run_user); 
	
	if($check_user==1){
	
	$_SESSION['user_email']=$email; 
	
	echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('Password or Email is wrong, try again!')</script>";
	
	}
	
	
	}
	
?>