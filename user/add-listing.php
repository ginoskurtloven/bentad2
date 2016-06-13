<?php include('header.php'); ?>
<?php include('nav-bar.php'); ?>

<div class="container">
	
	<div class="row">
		<div class="col-md-3">
			<h3>POST ADDS</h3>
			<?php $user = New User();
			$user_email_add = $_SESSION['user_email_add'];
			$user_info = $user->Fetch($user_email_add);
			 ?>
			 <img class="user-profile" src="<?php echo $user_info['avatar']; ?>" alt="<?php echo $user_info['username']; ?>">
			 <p><?php echo $user_info['user_full_name']; ?></p>
			<p onclick="window.location.href='index.php'" class="btn btn-default btn-block">Dashboard Area</p>
		</div>
		<div class="col-md-9">
			<!-- FORM POST ADDS STARTS HERE -->
			<h2>Post Free Adds</h2>
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="from-group">
					<label>Add Title</label>
					<input class="form-control" type="text" id="" name="adds-title" placeholder="e.g: Macbook Pro">
				</div>
				<div class="form-group">
					<label>Category</label>
					<select class="form-control" id="" name="category" placeholder="Please Select">
						<option value="" selected disabled>Please Select</option>
						<option value="1">Electronics</option>
						<option value="2">Computer & Gadgets</option>
						<option value="3">Cars & Vehicles</option>
						<option value="4">Musical Instrument</option>
						<option value="5">Home and Appliances</option>
						<option value="6">Clothing and Accessories</option>
					</select>
				</div>
				<div class="form-group">
					<label>Price:</label>
					<input class="form-control" type="text" name="item_price">
				</div>
				<div class="form-group">
					<label>Item Condition</label>
					<select class="form-control" name="item_condition">
						<option value="" selected disabled>Please Select</option>
						<option value="brand_new">Brand New</option>
						<option value="second_hand">Second Hand</option>
					</select>
				</div>
				<div class="form-group">
					<label>Location</label>
					<select class="form-control" name="location">
						<option selected disabled>Select Location</option>
						<option value="loc_1">Luzon</option>
						<option value="loc_2">Visayas</option>
						<option value="loc_3">Mindanao</option>
					</select>
				</div>
				<div class="form-group">
					<label>Add Description</label>
					<textarea placeholder="Post Description" class="form-control" name="item_desc" rows="10"></textarea>
				</div>
				<div class="form-group">
					<label>Contact Info</label>
					<input type="text" name="contact_info" placeholder="Phone Number" class="form-control">
				</div>
				<div class="form-group">
					<label>Listing Images:</label>
					<input type="file" name="product_img" multiple="">
				</div>
				<input class="btn btn-default btn-md" type="submit" name="add_post" value="SUBMIT">
				
			</form> <!-- form end -->
			<!-- process -->
			<?php
				if(isset($_POST['add_post'])) {

					$item_title = $_POST['adds-title'];
					$item_category = $_POST['category'];
					$item_price = $_POST['item_price'];
					$item_condition = $_POST['item_condition'];
					$item_location = $_POST['location'];
					$item_desc = $_POST['item_desc'];
					$item_contactinfo = $_POST['contact_info'];
					$status = "draft";
					$item_img = $_POST['product_img'];

					//Upload Process

					require '../class/class.imageupload.php';

					$image = new ImageUploader(1000, 1500, 1500, 'upload/adds/');

					$image->setImage($item_img); //Name of the input image field name

					//check image size
					if (!$image->checkSize())
						$errors[] = "File size is to Big";

					//check image height
					if(!$image->checkHeight())
						$errors[] = "File height is Big";

					if(!$image->checkWidth()) //check image width
						$errors[] = "File width is Big";
		
					if(!$image->checkExt()) //check image extension
						$errors[] = "File ext is not supported";

					//if no errors process the upload
					if(!isset($errors)){
						$image->setImageName($item_img); //set image name
						$image->deleteExisting();
						$image->upload();
		
							echo "<h2>Product Image Added</h2>";
					}else {
							echo "<h2>You must correct the errors to proceed</h2><br>";
							print_r($errors);
						}

					//Upload Process End
					//get User Id by user email in session
					$user = new User();
					$user_username = $_SESSION['user_email_add'];
					$result= $user->Fetch($user_username); //call get user function
					$user_id = $result['user_id'];

					$item_img_dir = $img->Upload();
					
					$listing = new Listing();
					$listing->add_listing($item_title,$item_category,$item_price,$item_condition,$item_location,$item_desc,$item_contactinfo,$status,$user_id,$item_img_dir); //insert data from the form


					
				}
			?>
			
		</div>
	</div>
	
</div>
<h3>&nbsp;</h3>
<?php include('footer.php'); ?>