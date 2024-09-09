<?php
include "db_connect.php";

$name=$_POST["name"];
$email=$_POST["email"];
$message=mysqli_real_escape_string($conn,$_REQUEST['mess']);
$sql="INSERT INTO contact (name,email,message)VALUES('$name','$email','$message')";
$res=mysqli_query($conn,$sql);
if($res){
	echo "<h1> 
		<script>
		alert('Thank you for your message')
		location.href='index.php'</script>
	</h1>";
}
else{
	echo "error";
}

?>