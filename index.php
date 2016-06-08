<?php include('inc/header.php'); ?>
<?php include('inc/nav_bar.php'); ?>

<div class="container-fluid search-area">

<div style="margin: auto; max-width: 650px;">
  <div class="row">
      <form class="form-inline">
        <div class="form-group">
            <!-- select area -->
            <select class="form-control" value="Please Select">
              <option value="catall">All Categories</option>
              <option value="cat1">Electronics</option>
              <option value="cat2">Computer & Gadgets</option>
              <option value="cat3">Cars & Vehicles</option>
              <option value="cat4">Musical Instrument</option>>
              <option value="cat5">Home & Appliances</option>
              <option value="cat6">Clothing & Services</option>
            </select>
        </div>
        <div class="form-group">
          <!-- <label class="sr-only" for="inputPassword">Password</label> -->
            <input type="text" class="form-control" id="" placeholder="Looking for?...">
        </div>
        <button type="submit" class="btn btn-default">SEARCH</button>
        <p onclick="window.location.href='signup.php'" class="btn btn-success">JOIN NOW</p>   
    </form>
    <!-- <button onclick="window.location.href='signup.php'" class="btn btn-success">SELL YOUR ITEM</button> -->
  </div> <!-- end row -->
  
</div>
</div>

   <div class="container">
   <div class="row">
     <div class="col-lg-12">
       <h2 class="text-center">Bentad2 - Online Selling</h2>
       <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit lorem ipsum dolor si amet.</p>
     </div>
<!-- spacer -->
<h1>&nbsp;</h1>

     <div class="row">
       <div class="col-lg-5">
         <h4>Need to upgrade? <span style="color: #28A9D1;">Join Now and Sell your Used Item here for free!</span></h4>
         <button onclick="window.location.href='signup.php'" class="btn btn-lg btn-block btn-info"><span style="font-weight: 700;">Post Your Add Now!</span></button>
       </div>

       <div class="col-lg-7">
         <!-- Category Box -->
         <div class="category-box">
         
			  <div class="row">
				 <div class="col-md-4">
				    <div class="cat-box" style="">
						  <center><i onclick="window.location.href='electronics.php'" class="fa fa-laptop fa-3x" aria-hidden="true"></i></center>
						  <p style="text-align: center;"><a href="electronics.php">Electronics</a></p>
					   </div>
				 </div>
				 <div class="col-md-4"> 
          <div class="cat-box" style="">
					   <center><i onclick="window.location.href='computer-gadgets.php'" class="fa fa-camera fa-3x" aria-hidden="true"></i></center>
					   <p style="text-align: center;"><a href="computer-gadgets.php">Computer & Gadgets</a></p>
          </div>
				  </div>
				 <div class="col-md-4"> 
         <div class="cat-box">
  					<center><i onclick="window.location.href='cars-and-vehicles.php'"  class="fa fa-car fa-3x" aria-hidden="true"></i></center>
  					<p style="text-align: center;"><a href="cars-and-vehicles.php">Cars & Vehicles</a></p>
          </div>
				 </div>
			 </div>
		    &nbsp;
			 <div class="row">
				 <div class="col-md-4"> 
         <div class="cat-box">
					 <center><i onclick="window.location.href='musical-instrument.php'"  class="fa fa-music fa-3x" aria-hidden="true"></i></center>
					<p style="text-align: center;"><a href="musical-instrument.php">Musical Instrument</a></p>
          </div>
				 </div>
				 <div class="col-md-4"> 
         <div class="cat-box">
					 <center><i onclick="window.location.href='home-and-appliances.php'" class="fa fa-home fa-3x" aria-hidden="true"></i></center>
					 <p style="text-align: center;"><a href="home-and-appliancers.php"/>Home and Appliances</a></p>
          </div>
				 </div>
				 <div class="col-md-4"> 
         <div class="cat-box">
					<center><i onclick="window.location.href='clothing-and-accessories.php'" class="fa fa-dot-circle-o fa-3x" aria-hidden="true"></i></center>
					<p style="text-align: center;"><a href="clothing-and-accessories.php">Clothing and Accessories</a></p>
         </div> 
				 </div>
			 </div>
      	
      	</div> <!-- end of category box -->
      	
       </div> <!-- End of Col-lg-8 -->
     </div> <!-- end of row -->
   </div> <!-- end of container -->
<h1>&nbsp;</h1> <!-- Just for spacing purpose -->
<?php include 'inc/footer.php';?>
