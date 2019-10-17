<?php 
$errors = '';
$myemail = 'adamlouly3@gmail.com';//<-----Put Your email address here.
if(empty($_POST['contact-inquiry'])  || 
   empty($_POST['contact-name']) || 
   empty($_POST['contact-email']))
{
    $errors .= "\n Error: all fields are required";
}

$inquiry = $_POST['contact-inquiry']; // required
$first_name = $_POST['contact-name']; // required
$last_name = $_POST['contact-last-name']; // required
$email = $_POST['contact-email']; // not required
$message = $_POST['contact-message']; // required

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $first_name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $first_name $last_name \n Email: $email \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>