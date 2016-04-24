<!-- Header Included -->
<?php include('inc/header.php'); ?>
<body>
<!-- Include Navigation -->
<?php include('inc/nav_bar.php'); ?>
<div class="container">
		<div class="col-md-6">
		<!-- Sign-up form -->
		
		<h3>Not A Member?</h3>
			<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
			<div class="form-group">
				<label for="">Full name</label>
				<input class="form-control" type="text" placeholder="First Name" name="full_name">
			</div>
			<div class="form-group">
				<label for="Last Name">Username</label>
				<input class="form-control" type="text" placeholder="Last Name" name="username">
			</div>
			<div class="form-group">
				<label for="email_add">Email Address</label>
				<input class="form-control" type="email" placeholder="you@youremailaddress.com" name="email_add">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" placeholder="password">
			</div>
			<input class="btn btn-warning btn-lg" type="submit" name="signup" placeholder="Sign up">
			</form>

	<!-- Form Process -->
		<?php 
			if (isset($_POST['signup'])) {

				$user_full_name = $_POST['full_name'];
				$user_username = $_POST['username'];
				$user_email_add = $_POST['email_add'];
				$user_password = $_POST['password'];

				$connection = new Database();

				$connection->insert($user_full_name,$user_username,$user_email_add,$user_password);
			}

		 ?>
		</div>
		<div class="col-md-6">
			<h2>SignUp Now!</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae in, unde provident sit ratione quis aliquid porro obcaecati, cum assumenda? Deserunt aperiam, quasi ratione sit quas tempora cum nam fuga.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, perferendis nihil beatae, inventore sed expedita commodi vero itaque voluptas sapiente numquam omnis eveniet ratione. Sed libero voluptate nemo quam, commodi.</p>
		</div>
</div>

<!-- Include Footer -->
<?php include('inc/footer.php'); ?>
<!-- end of footer -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>
</html>