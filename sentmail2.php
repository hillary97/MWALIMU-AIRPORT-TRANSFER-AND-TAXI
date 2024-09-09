<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "hillarynthome137@gmail.com";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $contact = $_POST['phone'];
 $flight = $_POST['flight'];
 $dept = $_POST['depature'];
 $to = $_POST['to'];
 $pass = $_POST['noofpass'];
 $tarehe=$_POST['date'];
 $subject="MWALIMU(ATAT) RESERVATION MESSAGE";
 $message = "Cleint Name: " . $name . "\n"
 . "Email adrees:".$fromEmail."\n\n"
 . "Phone Number: " . $contact . "\n\n"
  . "Flight: " . $flight . "\n\n"
   . "Depature from: " . $dept . "\n\n"
    . "Destination: " . $to . "\n\n"
     . "Number of passengers: " . $pass . "\n\n"
      . "Date: " . $tarehe;

 
 $headers = "From: " . $fromEmail; // Client email, I will receive
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
 
  //Checking if Mails sent successfully
 
  if ($result1) {
    echo "<script>alert('Your Message was sent Successfully!');
    location.href='index.php';</script>

    ";
  } else {
     echo "<script>alert('Your Message was not sent Successfully!');
    location.href='index.php';</script>
    ";
  }
 
}
 
?>