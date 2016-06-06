<?php include('inc/header.php'); ?>
<!-- Include Navigation -->
<?php include('inc/nav_bar.php'); ?>
<div class="container">
		<div class="col-md-6">
		<!-- Sign-up form -->
		
		<h3>Not A Member?</h3>
			<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
			<div class="form-group">
				<label for="">Full name</label>
				<input class="form-control" type="text" placeholder="Full Name" name="full_name" required>
			</div>
			<div class="form-group">
				<label for="Last Name">Username</label>
				<input class="form-control" type="text" placeholder="Username" name="username" required>
			</div>
			<div class="form-group">
				<label for="email_add">Email Address</label>
				<input class="form-control" type="email" placeholder="you@youremailaddress.com" name="email_add" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" placeholder="password" required>
			</div>
			<input class="btn btn-default btn-md" type="submit" name="signup" value="REGISTER">
			</form>
		<?php 
		//Form Process
			if (isset($_POST['signup'])) {
				
				$connection = new Database();
				
				//Get the Data from form
				$full_name = mysqli_real_escape_string($connection->connect(), $_POST['full_name']); // Escape before Sending to query
				$username = mysqli_real_escape_string($connection->connect(), $_POST['username']);
				$email_add = mysqli_real_escape_string($connection->connect(), $_POST['email_add']);
				$password = mysqli_real_escape_string($connection->connect(), $_POST['password']);
					 
				$user = new User();
				//Inster the Data and call the add_user() funciton.
				$query = $user->add_user($full_name,$username,$email_add,$password);
			}
		 ?>
		</div>
		<div class="col-md-6">
			<h2>SignUp Now!</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae in, unde provident sit ratione quis aliquid porro obcaecati, cum assumenda? Deserunt aperiam, quasi ratione sit quas tempora cum nam fuga.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, perferendis nihil beatae, inventore sed expedita commodi vero itaque voluptas sapiente numquam omnis eveniet ratione. Sed libero voluptate nemo quam, commodi.</p>

			<p>If you are already a Member Click the Login Button Bellow.</p>
			<p onclick="window.location.href='login.php'" class="btn btn-success btn-md">LOGIN HERE</p>
		</div>

</div>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<!-- Include Footer -->
<?php include('inc/footer.php'); ?>