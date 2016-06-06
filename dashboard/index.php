<?php include('inc/header.php'); ?>
	<body>
<!-- Navigation -->
<?php include('inc/nav_bar.php'); ?>
		<section>
			<div class="container">
				<div class="row">
				<div class="sidebar-dashboard">
					<div class="col-md-4">
						<h2>Sidebar Area</h2>
						<p>Kurt Loven Ginos</p>
						<p><a href="listing-area.php">LISTING AREA</a></p>
						<p><a href="listing.php"> ADD LISTING</a></p>
						<p><a href="profile.php"> PROFILE SETTING</a></p>
					</div>
					<div class="col-md-8">
						<h3>Dashboard Area</h3>
						<h4>STATUS:</h4>
					<div class="alert alert-warning" role="alert"><strong>Oh snap!</strong> Change a few things up and try submitting again.</div>
					<div class="col-md-3">
						<!-- Get Number of Current Draft Listing -->
						<span style="font-size: 34px;" class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
						<p> Pending Listing: <?php $count = new Listing(); echo $count->get_draft_lisiting(); ?></p>
					</div>
					<div class="col-md-3">
						<!-- Get Total Number of Current Lisiting -->
						<span style="font-size: 34px;" class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
						<p>Product Count: <?php $count = new Listing(); echo $count->get_num_listing(); ?></p>
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-3"></div>
					</div>
				</div>
				</div>
			</div>
			
		</section>
<!-- Footer Included -->
<?php include('inc/footer.php'); ?>
</body>
</html>