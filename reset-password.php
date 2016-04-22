<!-- Include Header -->
<?php include('inc/header.php'); ?>

<body>
	<!-- Include Navigation -->
<?php include('inc/nav_bar.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-5">
			<form action="" method="POST">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control">
				</div>
				<input class="btn btn-success btn-md" type="submit" value="Reset Password" name="">
			</form>
		</div>
		<div class="col-md-7">
			<h3>Forgot Your Password?</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quae quas quo. Qui, illo laudantium necessitatibus veritatis itaque cum blanditiis libero quasi voluptatibus, sit nostrum assumenda rerum consectetur quis aut!</p>
			<p><a href="login.php">Back to Login Area</a></p>
		</div>
	</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>
</html>