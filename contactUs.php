<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TextTweaker</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<!-- Header -->
<header>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <img class="logoimage" src="img/logo.png" alt="logo">
                <a href="#" class="a_logo">TextTweaker</a>
            </div>
            <ul>
                <li><a href="index.php" class="links_li ">Home</a></li>
                <li><a href="aboutUs.php" class="links_li ">About</a></li>
                <li><a href="#" class="links_li highlight">Contact Us</a></li>
                <li><a href="pricing.php" class="links_li ">Pricing</a></li>
                <li><button class="signUpBtn"><a href="signup.php">SignUp</a></button></li>
                <li><button class="loginBtn"><a href="login.php">Login</a></button></li>
            </ul>
        </div>
    </nav>
</header>
    <!-- body -->
    <section>
        <div class="contactUsDiv1">
            <h1 class="contactusH1">
                Contact Us!
            </h1>
            <p class="ContactUsP">
                Have a question, suggestion, or just want to say hello? We'd love to hear from you! Our dedicated support team is ready to assist you with any inquiries you may have. Feel free to reach out through the contact form below, and we'll get back to you promptly. Your feedback is invaluable to us as we strive to continually enhance your experience with Text Tweaker. Thank you for choosing us as your writing companion. Let's connect!
            </p>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col1"><a href="#"><img class="imgContactUs" src="img/email_png.png" alt="email"></a></div>
            <div class="col2"><a href="#"><img class="imgContactUs" src="img/fb_png.png" alt="facebook"></a></div>
            <div class="col3"><a href="#"><img class="imgContactUs" src="img/whatsapp_png.png" alt="whatsapp"></a></div>
        </div>
    </section> 
    <br>
    <br>
    <section>
        <div class="row">
            <div class="col4"><a href="#"><img class="imgContactUs" src="img/insta_png.png" alt="instagram"></a></div>
            <div class="col5"><a href="#"><img class="imgContactUs" src="img/twitter_png.png" alt="twitter"></a></div>
            <div class="col6"><a href="#"><img class="imgContactUs" src="img/Linkedin_png.png" alt="linkedin"></a></div>
        </div>
    </section>
    <br>
    <section>
        <h2 class="contactUsH2">Visit Us: <span class="ContactUsSpan">Our Physical Address</span></h2>
        <p class="contactUsP">
            For those who prefer traditional communication, our physical address is available for your reference. <br> Drop by or send us mail – we love hearing from our users.
        </p>
        <p class="contactUsP1">
            [Text Tweaker] <br>
            [I-14, Islamabad] <br>
            [Islamabad, Pakistan, 125009] <br>
        </p>
    </section>
    <!-- footer -->
    <footer>
    <?php
include('footer.php');
?>
        </footer> 
</body>
</html>