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

    if(empty(name)){
        $valErr .= "Please enter your business's name.<br/>";
    }
    if(empty(type)){
        $valErr .= "Please enter your business's type.<br/>";
    }
    if(empty(website)){
        $valErr .= "Please enter your business's website.<br/>";
    }
    if(empty(zip)){
        $valErr .= "Please enter your business's zip code.<br/>";
    }
    if(empty(first)){
        $valErr .= "Please enter your first name.<br/>";
    }
    if(empty(last)){
        $valErr .= "Please enter your last name.<br/>";
    }
    if(empty(email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $valErr .= "Please enter a valid email address.<br/>";
    }
    if(empty(phone)){
        $valErr .= "Please enter your phone number.<br/>";
    }

    if(empty($valErr)){
        $mailTo = "andrewstsai@gmail.com";
        $headers = "From: ".$email;
        $subject = $name."\n".$type."\n".$website."\n".$zip."\n".$first."\n".$last."\n".$email."\n".$phone."\n";
        $txt = "Business Application Received From ".$name;
        mail($mailTo,$subject,$txt,$headers);
        $statusMsg = "Thank you, your business application has been submitted successfully, we'll get back to you soon.";
    } else {
        $statusMsg = "<p>Please fill out all mandatory fields:</p>".trim($valErr,"</br>");
    }
    

}
?>