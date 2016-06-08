<?php include('inc/header.php');?>
<?php include('inc/nav_bar.php');?> <!-- Include Navigation -->
<?php $Listing = new Listing(); ?>
<div class="container">
	<div class="col-md-3">
	<h2>Electronics</h2>
	<h3>Category</h3>
	<p>Cameras and Camcorders</p>
	<p>Headsets</p>
	<p>Electronics</p>
	<p>Accessories</p>
	<p>Amplifiers</p>
	<p>TV</p>
	<p>Other</p>
	<hr>
	</div>
	<div class="col-md-9">
		<h4>ELECTRONICS</h4>
		<?php
		$category_id = '1'; 
		$count = $Listing->get_num_rows($category_id);
		?>
		<p>We found <?php echo $count; ?> Ad Post for the category " Electronics "</p>
		<hr>
		<div class="row">
		<?php
		$result = $Listing->get_all_cat1();
		for ($x=0; $x < count($result) ; $x++) { ?>

			<div class="col-md-3">
				    <div class="thumbnail">
				      <a href="adds.php?id=<?php echo $result[$x][0];?>"><img class="img-responsive" src="img/product_thumb.png" alt="<?php echo $result[$x][1]; ?>"></a>
				      <div class="caption">
				        <h5><?php echo $result[$x][1];?></h5>
				        <h6 class="product-price">₱<?php echo $result[$x][3];?></h6>
				        <p><i class="fa fa-bars fa-lg" aria-hidden="true"></i> Sub-Category</p>
				        <p><i class="fa fa-location-arrow fa-lg" aria-hidden="true"></i> <?php echo $result[$x][5]; ?></p>
				      </div>
				    </div>
  				</div>

		<?php }
		 ?>
		</div>
		<nav>
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>
	</div>
</div>

<!-- include footer area -->
<?php include'inc/footer.php';?>
