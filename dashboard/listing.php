<?php include 'inc/header.php'; ?>

<body>
<!-- navigation -->
<?php include('inc/nav_bar.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3>Sidebar Area</h3>
		</div>
		<div class="col-md-8">
		<!-- javascript Action to refresh the page -->
		<a href="javascript:location.reload(true)">Refresh this page</a>
		
			<form action="" method="POST">
				<div class="form-group">
					<label for="item_name">Item Name</label>
					<input type="text" name="item_name" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Category</label>
					<select name="item_category" id="" class="form-control">
						<option value="laptop">Computers</option>
						<option value="mobile">Mobile</option>
						<option value="clothes">Clothes</option>
						<option value="pets">Pets</option>
						<option value="cars">Cars</option>
						<option value="realestate">Real Estate</option>
						<option value="hobbies">Hobbies</option>
						<option value="motorcycle">Motorcycle</option>
						<option value="appliances">Appliances</option>
						<option value="furniture">Furniture</option>
						<option value="babystuff">Baby Stuff</option>
						<option value="services">Services</option>
					</select>
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="text" class="form-control" name="item_price">
				</div>
				<div class="form-group">
					<label for="condition">Condition</label>
					<input type="text" class="form-control" name="item_condition">
				</div>
				<div class="form-group">
					<label for="location">Location</label>
					<select name="item_location" id="" class="form-control">
						<option value="1">Location 1</option>
						<option value="2">Location 2</option>
						<option value="3">Location 3</option>
						<option value="4">Location 4</option>
						<option value="5">Location 5</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Description</label>
					<textarea name="item_desc" id="" cols="50" rows="10" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="">Listing Image</label>
					<input type="file" name="ListingImage">
				</div>
				<input class="btn btn-default btn-md" type="submit" name="add_listing" value="Submit Listing">
			</form>
		</div>

		<!-- form Process -->
		<?php 

			if (isset($_POST['add_listing'])) {
				//Get the data that sends from form
				$item_name = $_POST['item_name'];
				$item_category = $_POST['item_category'];
				$item_price = $_POST['item_price'];
				$item_condition = $_POST['item_condition'];
				$item_location = $_POST['item_location'];
				$item_desc = $_POST['item_desc'];

			$query =  new Listing();
			$query->add_listing($item_name,$item_category,$item_price,$item_condition,$item_location,$item_desc);

			}
		 ?>


	</div>
</div>
<!-- Include Footer -->
<?php require('inc/footer.php'); ?>
</body>
</html>
