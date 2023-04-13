<?php
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
    $subject = "Business Application Received From ".$name;
    $txt = $name."\n".$type."\n".$website."\n".$zip."\n".$first."\n".$last."\n".$email."\n".$phone."\n";
    mail($mailTo,$subject,$txt,$headers);
    //$statusMsg = "Thank you, your business application has been submitted successfully, we'll get back to you soon.";

    // header("Location:business-application.php");
?>