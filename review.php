<!DOCTYPE html>
<html>
<head>
	<title>MWALIMU AIRPORT TRANSFER AND TAXI</title>
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
		<header class="">
			<h1 style="text-align:center;padding-top:20px;color:red;padding-bottom:5px;font-weight:bolder;font-family:verdana"><img style="padding-bottom: 0px;" src="images/mlogo.PNG" width="200" height="100">&nbsp;&nbsp;&nbsp;Mwalimu Airport <span style="color:darkblue;opacity:1">Transfer AND Taxi</span></h1>
			<div style="width:100%;height: 2px;background-color: black" class=" bg-dark"></div>
		</header>
	<nav>
		<ul class="bg-warning">
			<li><a style="transition: .6s " class="" href="index.php">Taxis</a></li>
			<li><a href="carhire.php">CarHire</a></li>
			<li><a href="flight.php">Flights</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a class=" text-white" href="review.php">Reviews</a></li>
			<li><i style="font-size:30px" class='fa fa-phone'></i><a style="color:black;font-family: roboto mono;font-size:30px" href="#">+254 723 234 262 </a></li>
		</ul>
	</nav>
</div>
<h3 style="opacity:;font-weight: bolder;text-transform: uppercase;:hover:color-red" class="text-center text-muted p-3">Guest Reviews</h3>
<!--reviews and review form section-->
<div class="reviews container">

<?php
include 'db_connect.php';
/*if($conn){
	echo "connection success";
}
else{
	echo "conn failed";
}*/
$sql="SELECT fullname,email,message,rating FROM reviews";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
$i=0;
while($row=mysqli_fetch_array($res)){
	echo "<div style='background-color:;border-top-left-radius:20px;text-align:' class='container'>";
	echo "<p style='font-size:20px;padding:5px;border-radius:20px;font-weight:bold;margin-left:10px' class=' text-secondary'>".$row["fullname"]." "."<span class='badge-danger p-2' style='border-radius:50px;font-size:20px;color:white'>".$row['rating']." </span><span class='text-info'>stars"."</span>"."</p>";
	echo "<p style='padding-left:50px;width:100%;padding-bottom:12px;margin-left:50px;border-radius:5px;background-color:;padding-top:2px;margin-top:2px;border-bottom:4px solid black'>".$row["message"]."</p>";
		echo "</div>";
		echo "<br>";
$i++;
}
}
?>
<br><br><br><br>

	<form style="align-items: center;font-size: 20px"  class="form bg-secondary text-white" name="form1" action="msg.php" method="POST">
		<h3 style="font-weight:bolder;font-family:verdana" class="text-white">Send us a Review</h3>
		<label class="p-2">Enter your Fullname</label><input style="" class="form-control  " type="text" name="name" required><br>
		<label class="p-2">Enter your Email</label><input style=""  class="form-control " type="email" name="email" required><br>
		<label class="p-2">Enter Message</label><input style=""  class="form-control " type="text" name="mess" required><br>
		<label class="p-2">Enter your Star Rating</label><input style=""  class="form-control " type="number" max="5" min="0" name="rates" required><br>
		<input  style="font-weight:bolder;font-family:verdana" class="form-control p-2 w-100 float-center mb-2 bg-warning" type="submit" name="submit" value="Send message"><br>
	</form>

	</div>




<!--footer begin -->
<footer id="contact" class="fluid-container bg-dark">
	<div class="container footer-container  d-flex">
			<div class="section1 flex-fill">
				<h4 style="font-size: 20px" class="text-warning pb-3">Send us a message</h4>
				<form class="" name=""  method="POST" action="sentMail.php">
					<input class="form-control"  type="text" name="fname" placeholder="Enter your full name" required><br>
					<input class="form-control" type="email" name="email" placeholder="Enter your Email Address" required><br>
					<textarea style="height: 130px" class="form-control" placeholder="Tell us about Your message" name="message" required></textarea><br>
				
					<input style="color:white;border-radius:20px;padding:15px" class="text-center bg-success" type="submit"  name="submit" value="Send mesage">
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
				<h4  class="text-success">Our location</h4>
				<h5 style="font-weight: bold;color:orange;font-size:15px"><i class="fa fa-map" id="phonefa"></i>Gigiri UN Avenue,Nairobi</h5>
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
	</h5><br>
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