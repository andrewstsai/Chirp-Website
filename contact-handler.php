<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "andrewstsai@gmail.com";
    $headers = "From: ".$email;
    $subject = "Question Received From ".$name;
    $txt = $name."\n".$email."\n".$phone."\n".$message;
    mail($mailTo,$subject,$txt,$headers);
    //$statusMsg = "Thank you, your business application has been submitted successfully, we'll get back to you soon.";

    // header("Location:business-application.php");
?>