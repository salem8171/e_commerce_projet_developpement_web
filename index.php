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

													
												?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
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
