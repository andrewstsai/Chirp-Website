<?php
include_once 'business-application.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chirp - Business Application</title>
        <link rel="stylesheet" href="style.css">
        <!-- inter font-->
        <link rel="preconnect" href="https://rsms.me/">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <!-- inder font -->
        <link href='https://fonts.googleapis.com/css?family=Inder' rel='stylesheet'>
    </head>
<body>
    <header>
            
        <!-- Top header menu containing logo and Navigation bar -->
        <div id="top-header">
                
            <!-- Logo -->
            <div id="logo">
                <a href="index.html">
                    <img src="images/chirp_logo.png" alt="Home">
                </a>
            </div>   
                    
        </div>   
    </header>
    <div id="business-background-2">
        <img src="images/business-background-2.png">
    </div>
    <div id="business-application-header-1">
        <p>let&#39;s get chirping</p> 
    </div>
    <div id="business-application-header-2">
        <p>contact info</p> 
    </div>
    <!-- status message -->
    <?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $statusMsg; ?>"></div>
    <?php } ?>


    <!-- form -->
    <form class="contact-form" method="POST" action="contactform.php">
        <input name="business-name" type="text" placeholder="Business Name*" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>"/>
        <input name="business-type" type="text" placeholder="Business Type*" value="<?php echo !empty($postData['type'])?$postData['type']:''; ?>"/>
        <input name="business-website" type="text" placeholder="Website*" value="<?php echo !empty($postData['website'])?$postData['website']:''; ?>"/>
        <input name="business-zipcode" type="text" placeholder="Zip Code*" value="<?php echo !empty($postData['zipcode'])?$postData['zipcode']:''; ?>"/>
        <input name="business-first-name" type="text" placeholder="First Name*" value="<?php echo !empty($postData['first'])?$postData['first']:''; ?>"/>
        <input name="business-last-name" type="text" placeholder="Last Name*" value="<?php echo !empty($postData['last'])?$postData['last']:''; ?>"/>
        <input name="business-email" type="text" placeholder="Email*" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>"/>
        <input name="business-phone" type="text" placeholder="Phone Number*" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>"/>
        <div id="button-send-business">
            <input type="button" class="button" value="Send">
        </div> 
        <!-- <p><input type="submit" value="Send" /></p> -->
    </form>
    
    

</body>
</html>