<?php
session_start();
//give access only if the user has gotten to this page after signing in
  if(!isset($_SESSION['UId'])){
  header("Location: index.php"); 
  exit();
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>KaShare</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CSS here for now -->
	
	<link href="css/custom.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  
     <!-- NavBar --> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Menu</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">KaShare <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0"> -->
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    <!-- </form> -->
<p><a class="btn btn-success btn-sm" href="signOut.php" role="button">Sign Out</a></p>
  </div>
</nav>
    <!-- navbar ends -->
	
  <body>
	<div class="container-fluid">
	<h3>Welcome <?php echo $_SESSION['fname'];?></h3>
	<div class="row">
	
	<!-- left half -->
	<div class="col-lg-6 bordes">
	<center>
	<br>
	<h2>Book a car near you.</h2>
	<p>Get all kinds of cars to suit your needs. Take a long drive or run some errands. The world is your oyster.</p>
	
	</center>
	</div>
	<!-- left half end -->
	
	<!-- right half -->
	<div class="col-lg-6 bordes">
	<center>
	<h2>Put your car for hire</h2>
	<p>Let your car earn for you.</p>
	</center>		
		<form action="signUpUser.php" method="post" autocomplete="on">
		  <div class="form-row">
			<div class="form-group col-md-6">
			<label for="inputAddress">First Name</label>
			<input type="text" class="form-control" name="fname" placeholder="James" required>
			</div>
			<div class="form-group col-md-6">
			<label for="inputAddress">Last Name</label>
			<input type="text" class="form-control" name="lname" placeholder="Bond" required>
			</div>			
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputEmail4">Email</label>
			  <input type="email" class="form-control" name="email" placeholder="Email" required>
			</div>
			<div class="form-group col-md-6">
			  <label for="inputPassword4">Password</label>
			  <input type="password" class="form-control" name="password" placeholder="Password" required>
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputAddress">Address</label>
			<input type="text" class="form-control" name="add1" placeholder="1234 Main St" required>
		  </div>
		  <div class="form-group">
			<label for="inputAddress2">Address 2</label>
			<input type="text" class="form-control" name="add2" placeholder="Apartment, studio, or floor">
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-4">
			  <label for="inputCity">City</label>
			  <input type="text" class="form-control" name="city" required>
			</div>
			<div class="form-group col-md-4">
			  <label for="inputCity">County</label>
			  <input type="text" class="form-control" name="county">
			</div>
			<div class="form-group col-md-4">
			  <label for="inputZip">Zip/EIR Code</label>
			  <input type="text" class="form-control" name="zip">
			</div>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-4">
			  <label for="inputZip">Phone</label>
			  <input type="number" class="form-control" name="phone" required>
			</div>
			<div class="form-group col-md-4">
			</div>
			<div class="form-group col-md-4">
			  <label for="inputCity">Date of Birth</label>
			  <input type="date" class="form-control" name="dob">
			</div>
		  </div>
		  <!-- <button type="submit" class="btn btn-primary" name="submit">Sign Up</button> -->
		  <p><input type="submit" value="Submit" name="submit" /></p>
		</form>		

		<br>
	</div>
	<!-- right half end -->
	</div>
		
<!-- container div	ends	 -->
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>









