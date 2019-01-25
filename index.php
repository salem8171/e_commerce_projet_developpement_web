<?php include("includes/header.php"); ?>
<?php include("includes/slider.php"); ?>

<!--Content wrapper starts-->
<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
									<?php
										$con = mysqli_connect('localhost','root','','ecommerce');
										$req="select * from products";
										$res=mysqli_query($con,$req);
									?>
										<div class="active item">
											<ul class="thumbnails">	
												<!--////////////////////////////////////////////// -->
												<?php 
													while($data=mysqli_fetch_assoc($res))
													{
														$pro_id = $data['product_id'];
														$pro_cat = $data['product_cat'];
														$pro_brand = $data['product_brand'];
														$pro_title = $data['product_title'];
														$pro_price = $data['product_price'];
														$pro_image = $data['product_image'];
														
													
												?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><?php   	echo "
															<div id='single_product'>			
																<h3>$pro_title</h3>				
																<img src='admin_area/product_images/$pro_image' width='180' height='180' />				
																<p><b> Price: $ $pro_price </b></p>				
																<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>				
																<a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>			
															</div>		
														";
													?> </p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$17.25</p>
													</div>
												</li>
												<?php
													}
												?>
												<!--////////////////////////////////////////////// -->
											</ul>
										</div>
										
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$22.30</p>
													</div>
												</li>																																											
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						
								
					</div>				
				</div>
			</section>

<?php include("includes/our_clients.php"); ?>			
<?php include("includes/footer.php"); ?>
