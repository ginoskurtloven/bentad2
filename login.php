<?php include'inc/header.php';?>
<?php include'inc/nav_bar.php';?>
<!-- Navigation End -->
	<div class="container">
		<div class="col-md-6">
		<!-- login form -->
		<h3>Login Area</h3>
		
			<form action="" method="POST">
			<div class="form-group">
				<label for="email-add">Email Address</label>
				<input class="form-control" type="text" placeholder="youremailaddress@mail.com" name="email-address" maxlength="40" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" placeholder="**********" name="password" maxlength="20" required>
			</div>
				<input class="btn btn-success btn-md" type="submit" name="login" value="LOGIN">
			</form>
			
<?php
	//Instantiate
	$connection = new Database();
	
	$error = ''; //Create Error Variable will be called later

	if(isset($_POST['login'])) {
		$email_address = mysqli_real_escape_string($connection->connect(),$_POST['email-address']);
		$password = mysqli_real_escape_string($connection->connect(),$_POST['password']);
		
		$hash_password = md5($password); // Convert the Data Enter to Has md5()
		
		$result = mysqli_query($connection->connect(),"SELECT * FROM user WHERE user_email_add='$email_address' AND password='$hash_password'");
		$row = mysqli_num_rows($result); //Get Number of Rows return
		
		if ($row == 1) {

			//Assign $_SESSION[] after Login
			$_SESSION['user_email_add'] = $email_address;
			$_SESSION['user_password'] = $password;
			
			header('location: user/index.php');
			
		} else {
			$error = 'Invalid Login Details';
		}
	}

	mysqli_close($connection->connect());
?>	
		<!-- Error Area -->
		<div class="alert" role="alert">
		<!-- <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> -->
		<span class="sr-only">Error:</span>
			<?php echo $error; ?>
		</div>
		<!-- End Error -->
	</div>
	<div class="col-md-6">
			<h2>Terms and Conditions</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque minus hic iste, tempora quasi suscipit. Sit tempora nihil beatae libero nostrum quidem deleniti ab fuga molestias, accusantium quam atque adipisci?</p>
			<a href="reset-password.php">Forgot Password?</a>
	</div>
</div>
<h1 style="display: hidden; ">&nbsp;</h1> <!-- Spacing Purpose -->
<h1 style="display: hidden; ">&nbsp;</h1> <!-- Spacing Purpose -->
<h2 style="display: hidden; ">&nbsp;</h2> <!-- Spacing Purpose -->
<!-- Include Footer -->
<?php include'inc/footer.php';?>