
<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}?>
<?php
    Echo"hey";

if(isset($_POST['contact-email'])) {
    Echo"heys";

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "adamlouly3@gmail.com";
    $email_subject = "New Message from trucking website";

     
 
    $inquiry = $_POST['contact-inquiry']; // required
    $first_name = $_POST['contact-name']; // required
    $last_name = $_POST['contact-last-name']; // required
    $email = $_POST['contact-email']; // not required
    $message = $_POST['contact-message']; // required
     
 
    $email_message .= "inquiry: ".$inquiry."\n";
    $email_message .= "First Name: ".$first_name."\n";
    $email_message .= "Last Name: ".$last_name."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Message: ".$message."\n";
 
    // create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
header('Location: contact-form-thank-you.html');



?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>