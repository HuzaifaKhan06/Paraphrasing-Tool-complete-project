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
                <li><a href="#" class="links_li highlight">About</a></li>
                <li><a href="contactUs.php" class="links_li ">Contact Us</a></li>
                <li><a href="pricing.php" class="links_li">Pricing</a></li>
                <li><button class="signUpBtn"><a href="signup.php">SignUp</a></button></li>
                <li><button class="loginBtn"><a href="login.php">Login</a></button></li>
            </ul>
        </div>
    </nav>
</header>
    <!-- Body -->
    <section class="bodySection1">
        <!-- first div -->
        <div class="AboutUsFirstDiv">
            <h1 class="aboutusH1">
                About us!
            </h1>
            <br>
            <p class="aboutUsP">
                Welcome to Text Tweaker, where the power of language meets the art of innovation! We are passionate about transforming the way you create content through our cutting-edge paraphrasing tool and a suite of functions designed to cater to your diverse writing needs.</p>
                <br>
                <h2 class="aboutusH2">Summarizer Tool</h2>
                <br>
                <p class="aboutUsP">Distill large volumes of information into concise, clear summaries effortlessly. Our summarizer tool is engineered to extract the essence of your text, allowing you to convey key messages without losing vital details.</p>
                <br>
                <h2 class="aboutusH2">File Paraphrasing Tool</h2>
                <br>
                <p class="aboutUsP">Need to rephrase an entire document? Look no further! Our file paraphrasing tool seamlessly processes documents, maintaining the integrity of your content while giving it a refreshing twist. Whether it's an essay, report, or presentation, Text Tweaker has got you covered.</p>
                <br>
                <h2 class="aboutusH2">Language Simplifier</h2>
                <br>
                <p class="aboutUsP"> Communicate with clarity and simplicity. Our language simplifier function streamlines complex sentences, ensuring your message is easily understood by a broad audience. From academic writing to professional communication, Text Tweaker helps you break down language barriers.</p>
                
        </div>
        <!-- second div -->
        <div class="AboutUsSecondDiv">
            <img class="imgAboutUs" src="img/Logo_Website.png" alt="logo">
                <p class="aboutUsP">At Text Tweaker, we understand that effective communication is multifaceted, and that's why our platform goes beyond basic paraphrasing. These additional functions - the Summarizer Tool, File Paraphrasing Tool, and Language Simplifier - are designed to provide you with a comprehensive writing toolkit.</p>
                <br>
                <p class="aboutUsP">What sets Text Tweaker apart is its advanced algorithm, intelligently handling various writing tasks while preserving your unique voice. We're committed to making your writing experience seamless and efficient, no matter the complexity of your content.</p>
                <br>
                <p class="aboutUsP">Join the Text Tweaker community today and experience the versatility of our functions. Unleash your creativity with Text Tweaker – where words are reshaped, ideas flourish, and communication evolves. Your story, your way!</p>
        </div>
    </section>
<!-- footer -->
<footer>
<?php
include('footer.php');
?>
    </footer> 
</body>
</html>