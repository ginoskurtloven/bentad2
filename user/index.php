<?php include('header.php'); ?>
<?php include('nav-bar.php'); ?>
<div class="container">
<div class="row">
	
	<div class="col-md-3">	
		<h3>WELCOME!</h3>
		<?php
			$user = new User();
			$user_username = $_SESSION['user_email_add'];
			$userinfo = $user->Fetch($user_username);
		 ?>
		
		<a href="profile.php"><img class="user-profile" src="<?php echo $userinfo['avatar'];?>" alt="User Name"></a>
		<?php echo "<p style='font-weight: 500;'>" . $userinfo['user_full_name'] . "</p>"; ?><br>
		<p onclick="window.location.href='add-listing.php'" class="btn btn-default btn-block"> Post Adds</p>
		<br>
		<p onclick="window.location.href='profile.php'" class="btn btn-default btn-block"> Profile Setting</p>

	</div>
	<div class="col-md-9">
	<div class="alert alert-info" role="alert">
	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	<span class="sr-only">Greetings</span>
	Good Morning! User Full Name
	</div>
		<h2>Dashboard Area</h2>
		<div class="col-md-3">
			<p style="text-align: center;">Number of Listing</p>
			<p class="user-stat-count">1</p>
			<!-- <p onclick="window.location.href='add-listing.php'" class="btn btn-default">Add Listing</p> -->
		</div>
		<div class="col-md-3">
			<p style="text-align: center;">Product Views</p>
		</div>
		<div class="col-md-3">
			
		</div>
		<div class="col-md-3"></div>
		<p>
	</div>		
</div>
</div>
<h1>&nbsp;</h1> <!-- Just for spacing purpose -->
<h1>&nbsp;</h1> <!-- Just for spacing purpose -->
<?php include('footer.php'); ?>