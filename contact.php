<?php
//the script for the email form below

if(!empty($_POST['name'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$subject = "Sent from website form";
		$from = "From: " . $name . " at " . $email;


		mail("lawyeremail@yoursite.com", $subject, $message, $from);



	}else{
		echo "All fields must be filled in to send email!";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lawyer Name Lawyer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="scripts/jquery.js"></script>
	<script src="scripts/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">

		<!-- BEGGINING  -->
		<div class="row navbar">			
			<div class="logo col-lg-3 col-lg-offset-1 col-md-4 col-sm-4 col-xs-12">
				<h1 class="name">Lawyer Name</h1>
				<h3 class="number">(555) 555-5555</h3>
				<h4 class="saying">Standing Up For You</h4>
			</div>	

			<ul class="nav col-lg-5 col-lg-offset-2 col-md-6 col-md-offset-2 col-sm-8 hidden-xs">
				<li class="nav_link"><a href="index.html">About Us</a></li>
				<li class="nav_link"><a href="information.html">Information</a></li>
				<li class="nav_link"><a href="location.html">Location</a></li>
				<li class="nav_link"><a href="contact.html">Contact</a></li>
			</ul>

			<ul class="visible-xs col-xs-12">
				<li class="nav_link col-xs-12 text-center"><a href="index.html">About Us</a></li>
				<li class="nav_link col-xs-12 text-center"><a href="information.html">Information</a></li>
				<li class="nav_link col-xs-12 text-center"><a href="location.html">Location</a></li>
				<li class="nav_link col-xs-12 text-center"><a href="contact.html">Contact</a></li>
			</ul>
			
		</div><!-- end of row 1 -->

		<form action="contact.php" method="POST">
			<div class="row">
  				<div class="form-group col-md-3">
    				<label for="name">Name</label>
    				<input type="text" class="form-control" id="name" placeholder="Enter Your Full Name">
  				</div>
  			</div>
  			<div class="row">	
  				<div class="form-group col-md-3">
    				<label for="email">Email</label>
    				<input type="email" class="form-control" id="email" placeholder="Please Enter Your Email">
 			 	</div>
 			</div>
 			<div class="row">	 
 			 	<div class="form-group col-md-4">
 			 		<label for=message>Message</label>
 			 		<textarea class="form-control" rows="8" id="message"></textarea>
  			 	</div>
  			</div>	 
    		<button type="submit" class="btn btn-default">Send</button>
		</form>


		<!-- FOOTER -->
		<div class="row footer">
			<p class="col-md-12">**No representation is made that the quality of legal services to be performed is greater than the legal service performed by other lawyers.
			</p>
			<p class="col-md-12"> **We are a debt relief agency. We help people file for bankruptcy relief under the Bankruptcy code.
			</p>
		</div>
	</div><!-- end of container  -->	

</body>
</html>