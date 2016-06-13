<?php include 'inc/header.php'; ?> <!-- Include Header -->
<?php include 'inc/nav_bar.php'; ?> <!-- Include Navigation -->

<div class="container">
	<div class="col-md-2">

	</div>
	<div class="col-md-10">
		<?php if (isset($_GET['id'])) { 
			$item_id = $_GET['id']; //get thd id and assign it
			$item = new Listing();
			$result = $item->get_by_id($item_id); //fetch the Item adds by adds id
		?>
		<div class="col-md-6">
		<img src="img/product1.jpg" alt="Item Name">
		<div class="row">
		<hr>
		<div class="product-desc-area">
			<h4>Product Description:</h4>
			<p><?php echo $result['item_desc'];?></p>
		</div>
		<hr>
		<div class="row">
		<h4>Quick Enquiry</h4>
		<p>Enquire About this Product</p>
		<!-- Quick Enquiry Form -->
		<form method="post" action="">
		<div class="form-group">
			<label>Full Name:</label>
			<input class="form-control" type="text" name="full_name" id="">
		</div>
		<div class="form-group">
			<label>Email Address:</label>
			<input class="form-control" type="email" name="email">
		</div>
		<div class="form-group">
			<label>Contact Information:</label>
			<input class="form-control" type="number" min="1" max="12" name="contact_number" required>
		</div>
		<div class="form-group">
			<label>Location/Address:</label>
			<input class="form-control" type="text" name="location_add">
		</div>
		<div class="form-group">
			<label>Message</label>
			<textarea style="resize:none" class="form-control" rows="10" cols="10" placeholder="Rember be Nice!"></textarea>
		</div>
		<input value="SEND ENQUIRY" type="submit" class="btn btn-info btn-md">
		</form> <!-- End of form -->
		</div>

		</div>
		</div>
		<div class="col-md-6">
			<h3><?php echo $result['item_name']; ?></h3>
			<p>Posted By: Anoymous Last Date Here</p>
			<h3>Price: <?php echo $result['item_price']; ?></h3>
			<p>Location: <?php echo $result['item_location']; ?></p>
			<p>Sub-Category: </p>
			<p id="contact_info"><?php echo $result['contact_info'];?></p>
			<div clas="row">
				<p style="font-weight: 500;" class="btn btn-info btn-block btn-md">Do you have something to sell? Sell it here for free!</p>
			</div>
			&nbsp;
		<!-- Owner Profile Section -->
		<div class="row">
			<h3 style="text-align: center;">Owner Profile</h3>
			<div class="col-md-6">
				<h4>Owner Name</h4><br />
				<h5>Location:</h5> Zamboanga City
				<h5>Email Address:</h5> support@bentad2.com.ph
			</div>
			<div class="col-md-6">
				
				<!-- Owner Profile Image -->
				<img class="user-profile" src="img/profile-for-user.jpg" alt="Owner Profile Name" >
			</div>
		</div>
		<!-- Owner Profile Section End -->	
		</div>
	</div>
<? }	
	?>
</div>
<h1>&nbsp;</h1>
<?php include 'inc/footer.php'; ?> <!-- Include Footer -->
