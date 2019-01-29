<?php include("includes/header.php"); ?>
<?php include("includes/banner.php"); ?>

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
			$pro_cat = $row_pro['product_cat'];		
		}
	}
?>	

<section class="main-content">				
	<div class="row">						
		<div class="span12">
		<h4 class="title"><span class="text"><?php echo $pro_title ?></span></h4>
			<div class="row">
				<div class="span4">
					<a class="thumbnail" data-fancybox-group="group1" title="Description 1"><img style="width:360px; height:360px;" alt="" src="admin_area/product_images/<?php echo $pro_image ?>"></a>
					<br/>
				</div>
				<div class="span5">
					<address>
						<strong>Categorie:</strong> <span><?php echo $pro_cat ?></span><br>
						<strong>Product Code:</strong> <span><?php echo $pro_id ?></span><br>
						<strong>Availability:</strong> <span>In stock</span><br>								
					</address>									
					<h4><strong>Price: $<?php echo $pro_price ?></strong></h4>
				</div>
				<div class="span5">
					<form class="form-inline" action='index.php?pro_id=<?php echo $pro_id ?>'>
						<p>&nbsp;</p>
						<label>Qty:</label>
						<input type="text" class="span1" placeholder="1">
						<button class="btn btn-inverse" type="submit">Add to cart</button>
					</form>
				</div>							
			</div>
			<div class="row">
				<div class="span9">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#home">Description</a></li>
						<li class=""><a href="#profile">Additional Information</a></li>
					</ul>							 
					<div class="tab-content">
						<div class="tab-pane active" id="home"><?php echo $pro_desc ?></div>
						<div class="tab-pane" id="profile">
							<table class="table table-striped shop_attributes">	
								<tbody>
									<tr class="">
										<th>Size</th>
										<td>Large, Medium, Small, X-Large</td>
									</tr>		
									<tr class="alt">
										<th>Colour</th>
										<td>Orange, Yellow</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>							
				</div>						
			</div>
		</div>
	</div>
</section>

<?php include("includes/our_clients.php"); ?>
<?php include("includes/footer.php"); ?>