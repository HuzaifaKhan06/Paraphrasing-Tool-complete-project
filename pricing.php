<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TextTweaker Pricing</title>
    <link rel="stylesheet" href="CSS/pricing.css">
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
                <li><a href="contactUs.php" class="links_li ">Contact Us</a></li>
                <li><a href="#" class="links_li highlight">Pricing</a></li>
                <li><button class="signUpBtn"><a href="signup.php">SignUp</a></button></li>
                <li><button class="loginBtn"><a href="login.php">Login</a></button></li>
            </ul>
        </div>
    </nav>
</header>
    <!-- body -->
    <h1 class="PricingH1">TextTweaker Pricing Plan</h1>
    <div class="pricing-container">
        <div class="pricing-option">
            <h2 class="PricingH2">Free Plan</h2>
            <p>Basic features for free</p>
            <p>You can only use 3 times a day</p>
            <p>in free plan there maybe some errors</p>
            <a href="#" class="signup-link">Sign Up for Free</a>
        </div>
<hr >
        <div class="pricing-option">
            <h2 class="PricingH2">Premium Plan</h2>
            <p>Unlock advanced features</p>
            <p>no time limit</p>
            <p>correct and accurate data</p>
            <p>Only <del>30$</del> 19$ per month</p>
            <a href="#" class="signup-link">Sign Up for Premium</a>
        </div>
    </div>
</body>
    <!-- .............footer section .............. -->
    <footer>
    <?php
include('footer.php');
?>
        </footer>   
</html>
