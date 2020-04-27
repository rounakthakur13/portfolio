<?php
if(isset($_REQUEST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$to="rounakwork@protonmail.com";
$header="from: noreply@myportfolio.com ";
$message = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address \n\nMessage:\n$message";
$status=mail($to,$name,$message,$header);
if($status==true)
{
echo "Message is sent";
}
else{
    echo "Message failed to send";
}
}

?>