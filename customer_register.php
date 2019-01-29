<?php include("includes/db.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/banner.php"); ?>

<?php 
	if(isset($_POST['register']))
	{
		$ip = getIp();
		
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
		$c_image = $_FILES['c_image']['name'];
		$c_image_tmp = $_FILES['c_image']['tmp_name'];
		$c_country = $_POST['c_country'];
		$c_city = $_POST['c_city'];
		$c_contact = $_POST['c_contact'];
		$c_address = $_POST['c_address'];
	
		
		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");		
		$insert_c = "insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";	
		$run_c = mysqli_query($con, $insert_c); 		
		$sel_cart = "select * from cart where ip_add='$ip'";		
		$run_cart = mysqli_query($con, $sel_cart); 		
		$check_cart = mysqli_num_rows($run_cart); 		
		
		$_SESSION['customer_email']=$c_email; 		
		echo "<script>window.open('index.php','_self')</script>";
	}
?>

<section class="main-content">				
	<div class="row">
		<div class="span12" >					
			<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
			<form action="customer_register.php" method="post" enctype="multipart/form-data" style='margin-left:100px;'>		
				<table style ='align:center;' width="750">
					<tr>
						<td style ='align:center;'>Customer Name:</td>
						<td><input type="text" name="c_name" required/></td>
					</tr>			
					<tr>
						<td style ='align:center;'>Customer Email:</td>
						<td><input type="text" name="c_email" required/></td>
					</tr>			
					<tr>
						<td style ='align:center;'>Customer Password:</td>
						<td><input type="password" name="c_pass" required/></td>
					</tr>			
					<tr>
						<td style ='align:center;'>Customer Image:</td>
						<td><input type="file" name="c_image" required/></td>
					</tr>
					<tr>
						<td style ='align:center;'>Customer Country:</td>
						<td>
							<select name="c_country">
								<option>Select a Country</option>
								<option>Afghanistan</option>
								<option>India</option>
								<option>Japan</option>
								<option>Pakistan</option>
								<option>Nepal</option>
								<option>Tunisia</option>
								<option>United Arab Emirates</option>
								<option>United States</option>
								<option>United Kingdom</option>
							</select>				
						</td>
					</tr>			
					<tr>
						<td style ='align:center;'>Customer City:</td>
						<td><input type="text" name="c_city" required/></td>
					</tr>			
					<tr>
						<td style ='align:center;'>Customer Contact:</td>
						<td><input type="text" name="c_contact" required/></td>
					</tr>			
					<tr>
						<td style ='align:center;'>Customer Address</td>
						<td><input type="text" name="c_address" required/></td>
					</tr>
					<tr style ='align:center;'>
						<td colspan="6"><input type="submit" name="register" value="Create Account" /></td>
					</tr>
				</table>
			</form>

		</div>
	</div>
</section>
<!--Content wrapper ends-->

<?php include("includes/our_clients.php"); ?>
<?php include("includes/footer.php"); ?>