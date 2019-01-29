<?php include("includes/header.php"); ?>
<?php include("includes/slider.php"); ?>
<?php cart() ?>
<!--Content wrapper starts-->
<section class="main-content">
	<div class="row">
		<div class="span12">
			<?php
				$req_categories = "SELECT * FROM categories";
				$res_categories = mysqli_query($con,$req_categories);
				
				$nb_categories_fetched = 0;
				while($categorie_row = mysqli_fetch_assoc($res_categories))
				{
					$categorie_id = $categorie_row['cat_id'];
					$categorie_title = $categorie_row['cat_title'];

					echo "
						<div class='row'>
							<div class='span12'>
								<h4 class='title'>
									<span class='pull-left'><span class='text'><span class='line'>$categorie_title</span></span></span>
									<span class='pull-right'>
										<a class='left button' href='#myCarousel$categorie_id' data-slide='prev'></a><a class='right button' href='#myCarousel$categorie_id' data-slide='next'></a>
									</span>
								</h4>
								<div id='myCarousel$categorie_id' class='myCarousel carousel slide'>
									<div class='carousel-inner'>
					";

					$req="SELECT * FROM products WHERE product_cat = $categorie_id";
					$res=mysqli_query($con,$req);
				
					$nb_products_fetched = 0;
					while($data=mysqli_fetch_assoc($res))
					{
						$pro_id = $data['product_id'];
						$pro_cat = $data['product_cat'];
						$pro_brand = $data['product_brand'];
						$pro_title = $data['product_title'];
						$pro_price = $data['product_price'];
						$pro_image = $data['product_image'];
						
						if ($nb_products_fetched == 0)
						{
							echo "
								<div class='active item'>
									<ul class='thumbnails'>
							";
						}
						elseif ($nb_products_fetched % 4 == 0)
						{
							echo "
								<div class='item'>
									<ul class='thumbnails'>
							";
						}
						
						echo "
							<li class='span3'>
								<div class='product-box'>
									<p><a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_image' alt='' style='width:270px; height:250px;'/></a></p>
									<a href='details.php?pro_id=$pro_id' class='title'>$pro_title</a><br/>
									<a href='products.html' class='category'>$pro_cat</a>
									<p class='price'>$$pro_price</p>
									<a href='index.php?add_cart=$pro_id'><button>Add to Cart</button></a>
								</div>
							</li>
						";

						if (($nb_products_fetched + 1) % 4 == 0)
						{
							echo "
									</ul>
								</div>
							";
						}

						$nb_products_fetched++;
					}

					if ($nb_products_fetched % 4 != 0)
					{
						echo "
								</ul>
							</div>
						";
					}

					echo "
									</div>							
								</div>
							</div>						
						</div>
						<br/>
					";
				}
			?>												
			<?php include("includes/feature_box.php"); ?>
		</div>				
	</div>
</section>

<?php include("includes/our_clients.php"); ?>			
<?php include("includes/footer.php"); ?>
