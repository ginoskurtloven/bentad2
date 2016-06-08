<?php include 'inc/header.php'; ?>
<?php include 'inc/nav_bar.php'; ?>

<!-- Instantiate the Listing Class -->
<?php $Listing = new Listing(); ?>
 <div class="container">		
	<div class="col-md-3">
		<h2>Cars and Vehicles</h2>
		<h3>Category</h3> <!-- Sub category List -->
	<hr>
	</div>
	<div class="col-md-9">
		<h4>Cars and Vehicles</h4>
	<?php
	$category_id = 3;
	$result = $Listing->get_num_rows($category_id);
	?>
		<p>We found <?php echo $result;?> Ad Post for the category " Cars and Vehicles "</p>
		<hr>
	<div class="row">
		
		<div class="col-md-3">
		    <div class="thumbnail">
		      <a href="adds.php?id=6"><img class="img-responsive " src="img/product_thumb.png" alt="Nikon Camera"></a>
		      <div class="caption">
		        <h5>Nikon Camera</h5>
		        <h6 class="product-price">₱10,000</h6>
		        <p><i class="fa fa-bars fa-lg" aria-hidden="true"></i> Sub-Category</p>
		        <p><i class="fa fa-location-arrow fa-lg" aria-hidden="true"></i> Zamboanga City</p>
		      </div>
		    </div>
		</div>
	</div> <!-- end of row -->
	</div>
</div> <!-- End of Container -->

<?php include 'inc/footer.php'; ?>
