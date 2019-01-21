<?php include("includes/header.php"); ?>
<section class="header_text sub">
	<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
	<h4><span>Product Detail</span></h4>
<section class="header_text sub">
<br/>
<br/>		
<div id="content_area">
	<div id="shopping_cart"> 			
		<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
			Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Items: Total Price: <a href="cart.php" style="color:yellow">Go to Cart</a>
		</span>
	</div>
	<br/>
	<br/>
	<br/>
	<div id="products_box">
		<?php 
			if(isset($_GET['pro_id']))
			{			
				$product_id = $_GET['pro_id'];			
				$get_pro = "select * from products where product_id='$product_id'";
				$run_pro = mysqli_query($con, $get_pro); 			
				while($row_pro=mysqli_fetch_array($run_pro))
				{
				
					$pro_id = $row_pro['product_id'];
					$pro_title = $row_pro['product_title'];
					$pro_price = $row_pro['product_price'];
					$pro_image = $row_pro['product_image'];
					$pro_desc = $row_pro['product_desc'];
				
					echo "
						<div id='single_product'>					
							<h3>$pro_title</h3>						
							<img src='admin_area/product_images/$pro_image' width='400' height='300' />						
							<p><b> $ $pro_price </b></p>						
							<p>$pro_desc </p>						
							<a href='index.php' style='float:left;'>Go Back</a>						
							<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>					
						</div>		
					";			
				}
			}
		?>				
	</div>
</div>
<?php include("includes/our_clients.php"); ?>

<section id="footer-bar">
	<div class="row">
		<div class="span3">
			<h4>Navigation</h4>
			<ul class="nav">
				<li><a href="./index.html">Homepage</a></li>  
				<li><a href="./about.html">About Us</a></li>
				<li><a href="./contact.html">Contac Us</a></li>
				<li><a href="./cart.html">Your Cart</a></li>
				<li><a href="./register.html">Login</a></li>							
			</ul>					
		</div>
		<div class="span4">
			<h4>My Account</h4>
			<ul class="nav">
				<li><a href="#">My Account</a></li>
				<li><a href="#">Order History</a></li>
				<li><a href="#">Wish List</a></li>
				<li><a href="#">Newsletter</a></li>
			</ul>
		</div>
		<div class="span5">
			<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
			<br/>
			<span class="social_icons">
				<a class="facebook" href="#">Facebook</a>
				<a class="twitter" href="#">Twitter</a>
				<a class="skype" href="#">Skype</a>
				<a class="vimeo" href="#">Vimeo</a>
			</span>
		</div>					
	</div>	
</section>
<section id="copyright">
	<span>Copyright 2013 bootstrappage template  All right reserved.</span>
</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
			</section>
		</section></div>
</body>
</html>