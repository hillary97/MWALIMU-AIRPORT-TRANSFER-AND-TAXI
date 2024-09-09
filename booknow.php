<!DOCTYPE html>
<html>
<head>
	 <title>MWALIMU AIRPORT TRANSFER AND TAXI </title>
     <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div style="background-color:blue;height: 6px" class="fluid-container"></div>
	<div  class="container">
		<header>
			<h1 style="text-align:center;padding-top:20px;color:red;padding-bottom:5px;font-weight:bold;"><img style="padding-bottom: 0px;" src="images/mlogo.PNG" width="200" height="100">&nbsp;&nbsp;&nbsp;Mwalimu Airport <span style="color:darkblue;opacity:1">Transfer AND Taxi</span></h1>
			<div style="width:100%;height: 2px;background-color: black" class=" bg-dark"></div>
		</header>
	<nav>
		<ul class="bg-warning">
			<li><a style="transition: .6s " class="" href="index.php">Taxis</a></li>
			<li><a class="text-white" href="carhire.php">CarHire</a></li>
			<li><a href="flight.php">Flights</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="review.php">Reviews</a></li>
			<li><i style="font-size:30px" class='fa fa-phone'></i><a style="color:black;font-family: roboto mono;font-size:30px" href="#">+254 723 234 262 </a></li>
		</ul>
	</nav>
</div>
<div class="container">
	<div class="form-container flex-fill  ">
			<form method="post"  action="sentmail2.php" class="form-contain text-center ">
				<h1 style="padding-top:50px;font-weight: bold;font-size;color:red" class="text-center">Book now</h1>
				<input class="justify-content-center" type="text" name="name" placeholder="Your name" required><br>
				<input type="email" name="email" placeholder="Email address" required><br>
				<input type="text" name="phone" placeholder="Phone number" required><br>
				<input type="text" name="flight" placeholder="Flight details" required><br>
				<input type="text" name="depature" placeholder="From" required><br>
				<input type="text" name="to" placeholder="destination" required>
				<input type="number" name="noofpass" placeholder="Number of Passengers" required>
				<input type="date" name="date" placeholder="Travel date" required>
				<br><br>
				<input style="border:2px solid gray;width:auto;background-color:green;border-radius:10px;color:white" type="submit" name="submit" value="Make reservation">
			</form>
		</div>
	
</div>


<footer id="contact" class="fluid-container bg-dark">
	<div class="container footer-container  d-flex">
			<div class="section1 flex-fill">
				<h2 style="font-size: 30px" class="text-warning pb-3">Send us a message</h2>
				<form class=""  method="POST" action="sentMail.php">
					<input class="form-control"  type="text" name="fname" placeholder="Enter your full name" required><br>
					<input class="form-control" type="email" name="email" placeholder="Enter your Email Address" required><br>
					<textarea style="height: 130px" class="form-control" placeholder="Tell us about Your message" name="message" required></textarea><br>
				
					<input style="color:white;border-radius:20px;padding:15px" class="text-center bg-success" type="submit" name="submit" value="Send mesage">
					<br>
				</form>
			</div>
			<div class="section2 flex-fill text-center text-white">
				<h2 style="font-style: italic;font-family: monospace;font-size: 18px">Get the best Taxi Deals</h2>
				<h4 style="font-style: normal;font-family: monospace;font-size: 18px;padding:10px">MWALIMUAIRPORTTRANSFERANDTAXI</h4>
				<H5>5 STAR RATING</H5>
				<form class="">
					<img src="images/gal/f.jpg" width="250" height="200"><br><br>
					<a href="#"><img src="images/pesapal.PNG" width="200" height="50"></a>
				</form>
			</div>
			<div class="section3 flex-fill">
				<h2  class="text-success">Our location</h2>
				<h5 style="font-weight: bold;color:orange;font-size:15px"><i class="fa fa-map" id="phonefa"></i> Gigiri UN Avenue,Nairobi</h5>
				<a href="https://api.whatsapp.com/send?phone=+254 723 234 262 " target="_blank"><i class="fa fa-whatsapp" id="phonefa">
					
				</i>&nbsp;  +254 723 234 262 </a><br>
				<a style="text-decoration:none" href="mailto:erwachira32@gmail.com" target="_blank">
					<i class="fa fa-envelope" id="phonefa"></i>&nbsp; erwachira32@gmail.com</a><br>
					<br><br>
					<h6 style="font-weight: bold;color:orange;">Leave us a review</h6>
					<p class="text-white">By sending us a message</p>
</div></div>
<br><br>
<div style="color:white;background-color:black;text-align:center;font-size:10px;padding:40px 0px 15px;" class="final">
	<h5 >
		<a style="padding:15px;text-decoration:none;padding-bottom: 5px" href="#" class="fa fa-facebook-square" attr="facebook icon" target="_blank">
			<a style="padding:15px;text-decoration:none;padding-bottom: 5px" href="#" class="fa fa-twitter"></a>
			<a style="padding:15px;text-decoration:none;padding-bottom: 5px" href="#" class="fa fa-instagram"></a>
	</h5><br><br><br><br>
	<h3 style="font-size: 15px">Copyright © 2022 Mwalimu Airport Transfer and Taxi.</h3>
</div>
</footer>
<div class="whatsapp">
	<a href="https://api.whatsapp.com/send?phone=+254723234262" target="_blank">
     <img src="images/what.jpg"  alt="send us a message via whatsapp" style="position: fixed;border-radius:50px;right: 30px;bottom: 70px;z-index: 10000;height:60px">
     </a>
	</div>

</body>
</html>