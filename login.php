<?php include('inc/header.php'); ?> <!-- Header Included -->


<body>
<!-- Navigation Area Here -->
<?php include('inc/nav_bar.php'); ?>
<!-- Navigation End -->
<section>
	<div class="container">
		<div class="col-md-6">
		<!-- login form -->
		<h3>Login Area</h3>
			<form action="" method="POST">
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" id="username" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" value='password' name="password">
			</div>
				<input class="btn btn-success btn-md btn-lg" type="submit" name="login" value="login">
			</form>

		</div>
		<div class="col-md-6">
				<h3>Terms and Conditions</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque minus hic iste, tempora quasi suscipit. Sit tempora nihil beatae libero nostrum quidem deleniti ab fuga molestias, accusantium quam atque adipisci?</p>
				<a href="reset-password.php">Forgot Password?</a>
		</div>
	</div>
</section>

<!-- Include Footer -->
<?php include('inc/footer.php'); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>



</html>