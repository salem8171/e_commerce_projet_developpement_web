<?php include("includes/header.php"); ?>
<section class="header_text sub">
	<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
</section>	
<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
<div id="shopping_cart">		
	<span style="float:right; font-size:18px; padding:5px; line-height:40px;">	
		<?php 
			if(isset($_SESSION['customer_email']))
			{
				echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
			}
			else
			{
				echo "<b>Welcome Guest:</b>";
			}
		?>
		<b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_items();?> 
		Total Price: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Go to Cart</a>	
	</span>
</div>
<div id="products_box">
	<?php 
		if(!isset($_SESSION['customer_email']))
		{			
			include("customer_login.php");
		}
		else 
		{
			include("payment.php");
		}	
	?>	
</div>
<div></div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php include("includes/footer.php"); ?>