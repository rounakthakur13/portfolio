<!-- 
// if(isset($_REQUEST['submit'])){
// $name=$_POST['name'];
// $email=$_POST['email'];
// $message=$_POST['message'];
// $to="rounakwork@protonmail.com";
// $header="from: noreply@myportfolio.com ";
// $message = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address \n\nMessage:\n$message";
// $status=mail($to,$name,$message,$header);
// if($status==true)
// {
// echo "Message is sent";
// }
// else{
//     echo "Message failed to send";
// }
// }
 -->
 <?php
// Check for empty fields
if(isset($_REQUEST['submit'])){
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'rounakwork@protonmail.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@rounakportfolio.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;  
}       
?>