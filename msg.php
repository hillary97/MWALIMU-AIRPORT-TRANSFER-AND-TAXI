<?php
include "db_connect.php";

$name=$_POST["name"];
$email=$_POST["email"];
$message=mysqli_real_escape_string($conn,$_REQUEST['mess']);
$rating=$_POST["rates"];
$sql="INSERT INTO reviews (fullname,email,message,rating)VALUES('$name','$email','$message','$rating')";
$res=mysqli_query($conn,$sql);
if($res){
	echo "<h1> 
		<script>
		alert('Thank you for your Review')
		location.href='review.php'</script>
	</h1>";
}
else{
	echo "error";
}
?>