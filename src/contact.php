<?php

if (isset($_POST['button-send-business'])) {
    $name = $_POST['business-name'];
    $type = $_POST['business-type'];
    $website = $_POST['business-website'];
    $zip = $_POST['business-zipcode'];
    $first = $_POST['business-first-name'];
    $last = $_POST['business-last-name'];
    $email = $_POST['business-email'];
    $phone = $_POST['business-phone'];

    $mailTo = "andrewstsai@gmail.com";
    $headers = "From: ".$email;
    $subject = $name."\n".$type."\n".$website."\n".$zip."\n".$first."\n".$last."\n".$email."\n".$phone."\n";
    $txt = "Business Application Received From ".$name;
    mail($mailTo,$subject,$txt,$headers);
}

// Get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
 
$to = "yourEmail@gmail.com";
$subject = "This is the subject line";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:last.html");
?>