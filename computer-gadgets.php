<?php include'inc/header.php'; ?>
<?php include 'inc/nav_bar.php'; ?>
<?php $Listing = new Listing(); ?>
<div class="container">
	<div class="col-md-3">
		<h4>Computer And Gadgets</h4>
		<h3>Category</h3> <!-- Sub category List -->
	</div>
	<div class="col-md-9">
		<h4 style="text-transform: uppercase;">Computer and Gadgets</h4>
		<?php
		$category_id = 2;
		$count = $Listing->get_num_rows($category_id);
		?>
		<p>We found <?php echo $count; ?> Add Post for the category " Computer and Gadgets "</p>
		<hr>
		<div class="row">
		<?php
		$result = $Listing->get_all_cat2();
		/*
		$result will return array and use count($result) to
		ge the number of array and use that value to compare and loop
		 */

		for ($x=0; $x < count($result) ; $x++) { ?>

			<div class="col-md-3">
				    <div class="thumbnail">
				      <a href="adds.php?id=<?php echo $result[$x][0]?>"><img class="img-responsive" src="img/product_thumb.png" alt="Nikon Camera"></a>
				      <div class="caption">
				        <h5><?php echo $result[$x][1] ?></h5>
				        <h6 class="product-price">₱10,000</h6>
				        <p><i class="fa fa-bars fa-lg" aria-hidden="true"></i> Sub-Category</p>
				        <p><i class="fa fa-location-arrow fa-lg" aria-hidden="true"></i> Zamboanga City</p>
				      </div>
				    </div>
  				</div>

		<?php }
	?> <!-- End of Loop -->
		</div> <!-- end of row -->
	<!-- Pagination Start -->
	<nav>
	  <ul class="pagination">
	    <li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">«</span>
	      </a>
	    </li>
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	    <li>
	      <a href="#" aria-label="Next">
	        <span aria-hidden="true">»</span>
	      </a>
	    </li>
	  </ul>
	</nav> <!-- end of Pagination -->
	</div>
</div>

<?php include 'inc/footer.php'; ?>