<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "hillarynthome97@gmail.com";  //My email address
 //getting customer data
 $name = $_POST['fname']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $subject="MWALIMU CONTACT US MESSAGE";
 $message = $_POST['message']; //getting customer Phome number

 
 $headers = "From: " . $fromEmail; // Client email, I will receive
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
 
  //Checking if Mails sent successfully
 
  if ($result1) {
    echo "<script>alert('Your Message was sent Successfully!')
    location.href='';</script>

    ";
  } else {
     echo "<script>alert('Your Message was not sent Successfully!')
    l;</script>
    ";
  }
 
}
 
?>