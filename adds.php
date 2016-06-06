<?php include 'inc/header.php'; ?> <!-- Include Header -->
<?php include 'inc/nav_bar.php'; ?> <!-- Include Navigation -->

<div class="container">
	<div class="col-md-2"></div>
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
		<h4>Product Description:</h4>
		<p><?php echo $result['item_desc'];?></p>
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
		</div>
	</div>
<? }	
	?>
</div>
<h1>&nbsp;</h1>
<?php include 'inc/footer.php'; ?> <!-- Include Footer -->