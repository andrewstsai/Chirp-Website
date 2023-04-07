<?php
include_once 'contact-us.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chirp - Contact Us</title>
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
    <div id="contact-background">
        <img src="images/contact-background.png">
    </div>
    <div id="contact-us-header">
        <p>let&#39;s chat!</p> 
    </div>
    <div id="contact-us-header-2">
        <p>Chirp is just getting started, so we&#39;re more than happy to answer any questions! We&#39;d also love to hear how we&#39;re doing so share any feedback you have with us :&#41</p> 
    </div>

    <!-- form -->
    <form class="contact-form" method="POST" action="contact-handler.php">
        <input name="name" type="text" placeholder="Full Name*" required/>
        <input name="email" type="text" placeholder="Email*" required/>
        <input name="phone" type="text" placeholder="Phone Number*" required/>
        <div id="contact-form-message">
            <input name="message" type="text" placeholder="Message"/>
        </div>
        <div id="button-send-contact">
            <button type="submit" class="button">Send</button>
        </div> 
        <!-- <p><input type="submit" value="Send" /></p> -->
    </form>

</body>
</html>