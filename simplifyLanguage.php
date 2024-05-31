<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TextTweaker</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <!-- Header Section -->
    <?php
include('head1.php');
?>
    <!-- Body Section -->
    <section id="bodySection1">
        <div class="sectionDiv">
            <ul class="sectionDivUl">
                <li class="sc"><a href="Paraphrasing.php" class="ScLinks">Paraphrase</a></li>
                <li class="sc"><a href="summarize.php" class="ScLinks">Summarize</a></li>
                <li class="sc"><a href="paraphraseFile.php" class="ScLinks">Paraphrase File</a></li>
                <li class="sc"><a href="simplifyLanguage.php" class="ScLinks highlight">Simplify Language</a></li>
            </ul>
        </div>
    </section>
    <br>
    <section>
        <p class="simplify500">
            You Can Simplify Only 500 Characters At One Time
        </p>
        <div class="container1">
            <h1 class="LanguageH1">Language Simplification</h1>
            <textarea class="languageTextarea" id="inputText" placeholder="Enter text to simplify and paraphrase..."></textarea>
            <p class="error" id="errorMsg"></p>
            <button class="btnLanguage" onclick="simplifyAndParaphrase()">Simplify</button>
            <h2 class="LanguageH2">Simplified Text:</h2>
            <p id="outputText"></p>
        </div>
    </section>

<!-- footer -->
<footer>
<?php
include('footer.php');
?>
        <script src="js/simplifyLanguage.js"></script>
</body>
</html>
