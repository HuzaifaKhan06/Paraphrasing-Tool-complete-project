<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TextTweaker</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Josefin+Sans:wght@300&family=Lato:ital,wght@1,300&family=Lobster&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:ital,wght@1,700&display=swap"
        rel="stylesheet">
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
                <li><a href="#" class="links_li highlight">Home</a></li>
                <li><a href="aboutUs.php" class="links_li ">About</a></li>
                <li><a href="contactUs.php" class="links_li ">Contact Us</a></li>
                <li><a href="pricing.php" class="links_li">Pricing</a></li>
                <li><button class="signUpBtn"><a href="signup.php">SignUp</a></button></li>
                <li><button class="loginBtn"><a href="login.php">Login</a></button></li>
            </ul>
        </div>
    </nav>
</header>
    <!-- ......... main section .......... -->
    <section>
        <div class="belowNav">
            <p class="paragraph1">TextTweaker is a free online paraphrasing tool used to change words and rephrase
                sentences.</p>
            <h1 class="heading1">How to Use our Paraphrasing Tool?</h1>
            <p class="paragraph2">It is very easy to paraphrase online with our paraphrasing tool. To rephrase, follow
            </p>
            <p class="paragraph2">the steps below.</p>
        </div>
    </section>

    <!-- -------- four image text -------- -->

    <section class="fourImg">
        <div class="howToUseToolTips">
            <div class="div1">
                <div class="tip1">
                    <img src="img/pic1.png" alt="pic1" class="pic1">
                </div>

                <p class="POfTip1">Type/paste the text into the input box or upload a file (.doc, .docx, .pdf, .txt)
                    from
                    local storage.</p>
            </div>
            <div class="div2">
                <div class="tip2">
                    <img src="img/pic3.png" alt="pic2" class="pic2">
                </div>
                <p class="PofTip2">Select the required paraphrasing mode and click on the "Paraphrase" button.</p>
            </div>
        </div>
        <div class="howToUseToolTips">
            <div class="div1">
                <div class="tip1">
                    <img src="img/pic2.png" alt="pic1" class="pic1">
                </div>

                <p class="POfTip1">
                    The paraphrased text will be displayed on the right box. You can also change the modes for different
                    outputs.</p>
            </div>
            <div class="div2">
                <div class="tip2">
                    <img src="img/pic4.png" alt="pic2" class="pic2">
                </div>
                <p class="PofTip2">You can also copy and download the paraphrased text by clicking on the output
                    buttons.
                </p>
            </div>
        </div>
    </section>

    <!-- ------- paragraph section ------- -->

    <section>
        <div class="freeParaphrasing freeParaphrasing1">
            <h1>Free Paraphrasing Tool</h1>
            <p>Our paraphrasing tool (paraphraser) helps students, writers, and bloggers to avoid plagiarism. This
                rewording
                tool uses advanced AI algorithms to change sentence structure, synonymize the text and make other
                similar
                changes. <br>This word changer has a built-in paraphrase generator that helps in rephrasing any
                paragraph
                accurately.</p>
        </div>
        <div class="freeParaphrasing freeParaphrasing2">
            <h1>What is Paraphrasing?</h1>
            <p>Paraphrasing is one way to use a text in your own writing without directly quoting source material (<span
                    class="span1">according to Purdue University</span>). It is the process of rewording and rearranging
                sentence structure while keeping the original meaning of the context.</p>
        </div>
    </section>


    <!-- -------- card section ------ -->


    <section class="card-section">
        <h1 class="blogs">
            Blogs
        </h1>
        <div class="cards">
            <div class="card1">
                <img src="img/card1.jpg" alt="card1" class="imgCard">
                <div class="container">
                    <h4><b>What is it and is it worth it?</b></h4>
                    <p>Architect & Engineer</p>
                </div>
            </div>
            <div class="card2">
                <img src="img/card2.png" alt="card2" class="imgCard">
                <div class="container">
                    <h4><b>Lateral Marketing – What is it?</b></h4>
                    <p>Paraphrase & Content</p>
                </div>
            </div>
            <div class="card3">
                <img src="img/card3.png" alt="card3" class="imgCard">
                <div class="container">
                    <h4><b>Paraphrase and Periphrasis</b></h4>
                    <p>Marketing & Engineer</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- ..........Footer Starts............ -->

    <!-- .............footer section .............. -->
    <footer>
    <?php
include('footer.php');
?>
        </footer>   
</body>

</html>