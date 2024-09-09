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
 <style type="text/css">
 	* 
 	{
 		box-sizing: border-box;
 	}
body {
	font-family: Verdana, sans-serif;
}
.mySlides {
	display: none;
}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-weight: bolder;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 40s;


}
/*
.row{
  display:flexbox;
}
.column{
  flex:50%;
}
*/
@media only screen and (max-width: 900px){
  .tables{
    flex-direction: column;
    font-size:10px;
  }
}
@media only screen and (max-width: 600px){
  .table1,.table2{
    font-size:10px;
  }
}
@keyframes fade {
  from {opacity: .7} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
 </style>
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

<h2 style="font-weight:bolder" class="text-muted text-center ">Car Hire</h2>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="images/bus.jpg" style="width:100%;height: 40%">
  <div class="text-dark">car one</div>
</div>

<div  class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="images/red.jpg" style="width:100%;height: 40%">
  <div class="text">car Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="images/c5.jpg" style="width:100%;height: 40%">
  <div class="text">Car three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="images/c3.jpg" style="width:100%;height: 40%">
  <div class="text">car four</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="images/c2.jpg" style="width:100%;height: 40%">
  <div class="text">car 5</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="images/c4.jpg" style="width:100%;height: 40%">
  <div class="text">car 6</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="images/c1.jpg" style="width:100%;height: 40%">
  <div class="text">car 6</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
   <span class="dot"></span> 
    <span class="dot"></span> 
     <span class="dot"></span> 
     <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

<br><br><br>
<div class="container">
  <div style="font-size:12px"class="tables d-flex">
  <div class="col">
    <h4 class="text-info">Car Hire Rates Self Driver</h4>
    <div style="font-weight: bold;border-bottom:1px solid gray" class="table1 d-flex">
  <div class="col-sm-2">TYPE</div>
  <div class="col-sm-2">UNIT</div>
  <div class="col-sm-2">RATES<br>(USD)</div>
  <div  class="col-sm-2">FUEL</div>
  <div class="col-sm-2">VAT</div>
   <div class="col-sm-2">LIMIT</div>
</div>
 <div style="border-bottom:1px solid gray" class="table1 d-flex">
  <div class="col-sm-2">S/WAGON</div>
  <div class="col-sm-2">PER DAY MAX 24H</div>
  <div class="col-sm-2">$35</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2">200KM, ANY EXTRA KM IS CHARGED PER KM 0.2USD</div>
</div>
 <div style="border-bottom:1px solid gray" class="table1 d-flex">
  <div class="col-sm-2">SALOON</div>
  <div class="col-sm-2">PER DAY MAX 24H</div>
  <div class="col-sm-2">$40</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2"></div>
</div>
 <div style="border-bottom:1px solid gray" class="table1 d-flex">
  <div class="col-sm-2">NOAH</div>
  <div class="col-sm-2">PER DAY MAX 24H</div>
  <div class="col-sm-2">$65</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2"></div>
   
</div>
<div style="font-size: 12px ;border-bottom:1px solid gray" class="table1 d-flex">
  <div class="col-sm-2">MINI VAN</div>
  <div class="col-sm-2">PER DAY MAX 24H</div>
  <div class="col-sm-2">$80</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2"></div>
</div>
<div style="border-bottom:1px solid gray" class="table1 d-flex">
  <div class="col-sm-2">4 *4 MINI</div>
  <div class="col-sm-2">PER DAY MAX 24H</div>
  <div class="col-sm-2">$80</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2"></div>
</div>
  </div>
  <div class="col">
    <h4 class="text-info">Car Hire per day with Driver</h4>
     <div style="font-weight: bold;border-bottom:1px solid gray" class="table2 d-flex">
  <div class=" col-sm-2">TYPE</div>
  <div class="col-sm-2">UNIT</div>
  <div class="col-sm-2">RATES<br>(USD)</div>
  <div class="col-sm-2">FUEL</div>
  <div class="col-sm-2">VAT</div>
   <div class="col-sm-2">LIMIT</div>
</div>
<div  style="border-bottom:1px solid gray" class="table2 d-flex">
  <div class="col-sm-2">S/WAGON</div>
  <div class="col-sm-2">PER DAY MAX 12H</div>
  <div class="col-sm-2">$60</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2">200KM, ANY EXTRA KM IS CHARGED PER KM 0.2USD</div>
</div>
<div style="border-bottom:1px solid gray" class="table2 d-flex">
  <div class="col-sm-2">SALOON</div>
  <div class="col-sm-2">PER DAY MAX 12H</div>
  <div class="col-sm-2">$70</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2"></div>
</div>
 <div style="border-bottom:1px solid gray" class="table2 d-flex">
  <div class="col-sm-2">NOAH</div>
  <div class="col-sm-2">PER DAY MAX 12H</div>
  <div class="col-sm-2">$90</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2"></div>
</div>
<div style="border-bottom:1px solid gray" class="table2 d-flex">
  <div class="col-sm-2">MINI VAN</div>
  <div class="col-sm-2">PER DAY MAX 12H</div>
  <div class="col-sm-2">$100</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2"></div>
</div>
<div style="border-bottom:1px solid gray" class="table2 d-flex">
  <div class="col-sm-2">4 *4 MINI</div>
  <div class="col-sm-2">PER DAY MAX 12H</div>
  <div class="col-sm-2">$100</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2"></div>
</div>
<div style="border-bottom:1px solid gray" class="table2 d-flex">
  <div class="col-sm-2">4 *4 JEEP</div>
  <div class="col-sm-2">PER DAY MAX 12H</div>
  <div class="col-sm-2">$150</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2"></div>
</div>
<div style="border-bottom:1px solid grey" class="table2 d-flex">
  <div class="col-sm-2">ROSA</div>
  <div class="col-sm-2">PER DAY MAX 12H</div>
  <div class="col-sm-2">$200</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2"></div>
</div>
  </div>


</div>
</div>
<br><br>
 <div class="container">
    <h4 class="text-info text-center">Contract Rates for long term 6 Months & above</h4>
     <div style="font-weight: bold;border-bottom:0px solid gray" class="table2 d-flex">
  <div class=" col-sm-2">TYPE</div>
  <div class="col-sm-2">UNIT</div>
  <div class="col-sm-2">RATES<br>(USD)</div>
  <div class="col-sm-2">FUEL& VAT</div>
  <div class="col-sm-2">ENGN SERVs</div>
   <div class="col-sm-2">MILEAGE</div>
</div>
<div  style="border-bottom:0px solid gray;font-size:14px" class="table2 d-flex">
  <div class="col-sm-2">S/WAGON</div>
  <div class="col-sm-2">PER DAY</div>
  <div class="col-sm-2">$1,100</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2">5000km</div>
</div>
<div style="border-bottom:0px solid gray;font-size:14px" class="table2 d-flex">
  <div class="col-sm-2">SALOON</div>
  <div class="col-sm-2">PER DAY</div>
  <div class="col-sm-2">$1,300</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2">5000km</div>
</div>
 <div style="border-bottom:0px solid gray;font-size:14px" class="table2 d-flex">
  <div class="col-sm-2">NOAH</div>
  <div class="col-sm-2">PER DAY </div>
  <div class="col-sm-2">$1,800</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2">5000km</div>
</div>
<div style="border-bottom:0px solid gray;font-size:14px" class="table2 d-flex">
  <div class="col-sm-2">MINI VAN</div>
  <div class="col-sm-2">PER DAY</div>
  <div class="col-sm-2">$1,900</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2">5000km</div>
</div>
<div style="border-bottom:0px solid gray;font-size:14px" class="table2 d-flex">
  <div class="col-sm-2">4 *4 MINI</div>
  <div class="col-sm-2">PER DAY</div>
  <div class="col-sm-2">$2,400</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2">5000km</div>
</div>
<div style="border-bottom:0px solid gray;font-size:14px" class="table2 d-flex">
  <div class="col-sm-2">4 *4 JEEP</div>
  <div class="col-sm-2">PER DAY</div>
  <div class="col-sm-2">$3,600</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2">5000km</div>
</div>
<div style="border-bottom:0px solid gray;font-size:14px" class="table2 d-flex">
  <div class="col-sm-2">ROSA</div>
  <div class="col-sm-2">PER DAY</div>
  <div class="col-sm-2">$4,000</div>
  <div class="col-sm-2">EXCLUSIVE</div>
  <div class="col-sm-2">EXCLUSIVE</div>
   <div class="col-sm-2">5000km</div>
</div>
  </div>
<BR><BR>
<div class="sec container">
    <h6 class="text-info">VEHICLES - FUEL - MAINTENANCE</h6>
    <ul>
      <li>Except for the Chauffeur drive van, vehicles are supplied with a full tank of fuel and our customers must pay for any fuel missing at the end of the Rental. Normal Maintenance, oil and lubrication are included in the rates. Incurred roadside expenses which have been approved by MWALIMUAIRPORTTRANSFERANDTAXI will be refunded upon presentation of the original receipts.</li>
      <br>
      <li style="list-style-type: none" ><a style="text-decoration:none;color:white;background-color: green;padding:10px;margin-top: 2px" href="booknow.php">BOOK NOW</a></li>
    </ul>


</div>

<BR><BR>
	<!--footer begin -->
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