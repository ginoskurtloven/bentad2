<?php include('header.php'); ?>
<?php include('nav-bar.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php	
				$result = new User();
				$data = $result->Fetch($_SESSION['user_email_add']);
			?>
			<h3>Profile Information</h3>
			<a href="profile.php"><img class="user-profile" src="<?php echo $data['avatar'];?>" alt="User Name"></a>
			<p onclick="window.location.href='index.php'" class="btn btn-default btn-block">Dashboard Area</p>
		</div>
		<div class="col-md-9">
			<h3>Profile Information</h3>
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Full Name:</label>
					<input disabled="disabled" value="<?php echo $data['user_full_name'];?>" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Username:</label>
					<input disabled="disabled" value="<?php echo $data['username'];?>" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Email Address:</label>
					<input disabled="disabled" value="<?php echo $data['user_email_add']; ?>" type="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input placeholder="Your Password" type="password" name="user_password" class="form-control">
				</div>
				<div class="form-group">
					<label>Profile Image: </label>
					<p>Please Select Profile Image:</p>
					<input type="file" name="profile">
				</div>
				<input type="submit" name="UpdateProfile" id="UpdateProfile" class="btn btn-default" value="Update" >
			</form>
			<!-- End form -->
			<?php
			//check if image 
			if(isset($_POST['UpdateProfile'])) {

				 $user_password = $_POST['user_password'];
				 $hash = md5($user_password);

				//profile image process
				$target_dir = "upload/"; //target folder
				$target_file = $target_dir . basename($_FILES["profile"]["name"]);
				$uploadok = 1;
				$imageFiletype = pathinfo($target_file,PATHINFO_EXTENSION); //get the file extension
				
				if (file_exists($target_file)) {
					echo "Sorry file already exist try renaming it";
					$uploadok = 0;
				} else {
					//move the image to the destination folder upload/filename
					move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file);
					$connection = new Database();

					$query = mysqli_query($connection->connect(),"UPDATE user SET password='$hash', avatar='$target_file' WHERE user_email_add='{$_SESSION['user_email_add']}'");
				}

			}
			 ?>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>