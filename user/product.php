<?php include 'header.php'; ?>
<?php include 'nav-bar.php'; ?> <!-- include Navigation Bar -->

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<h3>Your Product</h3>
			<?php 
			$user = new User();
			$user_email = $_SESSION['user_email_add'];
			$userinfo = $user->Fetch($user_email); //get user info by email
			 ?>
			<img class="user-profile" src="<?php echo $userinfo['avatar']; ?>" alt="User Name" >
			<p><?php echo $userinfo['user_full_name']; ?></p>
			&nbsp;
			<p onclick="window.location.href='index.php'" class="btn btn-default btn-block">Back to Dashboard</p>
		</div>
		<div class="col-md-9">
			<div class="col-md-3">
	            <div class="thumbnail">
	              <!-- <img src="img/thumbnail.png" alt="product thumbnail"> -->
	                <div class="caption">
	                <h4>Thumbnail label</h4>
	                <p>Product short description will go here...</p>
	                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	                </div>
	            </div>
			</div>
			<div class="col-md-3">
	            <div class="thumbnail">
	              <!-- <img src="img/thumbnail.png" alt="product thumbnail"> -->
	                <div class="caption">
	                <h4>Thumbnail label</h4>
	                <p>Product short description will go here...</p>
	                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	                </div>
	            </div>
			</div>
			<div class="col-md-3">
	            <div class="thumbnail">
	              <!-- <img src="img/thumbnail.png" alt="product thumbnail"> -->
	                <div class="caption">
	                <h4>Thumbnail label</h4>
	                <p>Product short description will go here...</p>
	                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	                </div>
	            </div>
			</div>
			<div class="col-md-3">
	            <div class="thumbnail">
	              <!-- <img src="img/thumbnail.png" alt="product thumbnail"> -->
	                <div class="caption">
	                <h4>Thumbnail label</h4>
	                <p>Product short description will go here...</p>
	                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	                </div>
	            </div>
			</div>
		</div>
	</div>
</div>
<h1>&nbsp;</h1>
<?php include'footer.php'; ?> <!-- Include footer -->