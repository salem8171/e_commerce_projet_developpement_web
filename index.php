<?php include("includes/header.php"); ?>
<?php include("includes/slider.php"); ?>

<!--Content wrapper starts-->
<div class="span3">
	<div >Categories</div>
	<?php getCats(); ?>
	<div >Gender</div>
	<?php getBrands(); ?>
</div>
<div class="span8">
	<div id="content_area">
		<?php cart(); ?>
		<div id="shopping_cart">
			<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
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
				<b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Go to Cart</a>


				<?php
					if(!isset($_SESSION['customer_email']))
					{
						echo "<a href='checkout.php' style='color:orange;'>Login</a>";
					}
					else
					{
						echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
				?>
			</span>
		</div>
		<div id="products_box">
			<br/>
			<br/>
			<br/>
			<?php getPro(); ?>
			<br/>
			<br/>
			<br/>
			<?php getCatPro(); ?>
			<br/>
			<br/>
			<br/>
			<?php getBrandPro(); ?>
			<br/>
			<br/>
			<br/>
		</div>
	</div>
</div>
<br/>
<br/>
<br/>

<?php include("includes/our_clients.php"); ?>			
<?php include("includes/footer.php"); ?>
