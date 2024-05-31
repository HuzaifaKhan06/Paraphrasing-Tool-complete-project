<?php
session_start();
?>
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
                <li class="sc"><a href="#bodySection1" class="ScLinks">Paraphrase</a></li>
                <li class="sc"><a href="summarize.php" class="ScLinks">Summarize</a></li>
                <li class="sc"><a href="paraphraseFile.php" class="ScLinks">Paraphrase File</a></li>
                <li class="sc"><a href="simplifyLanguage.php" class="ScLinks">Simplify Language</a></li>
            </ul>
        </div>
    </section>
    <p class="note">"You can only Paraphrase 500 words at a time"</p>
    <section>
        <div class="paraphrasingDiv">
            <h1 class="ParaphrasingText">Paraphrasing Tool</h1>
            <textarea id="inputText" class="ParaphrasingTextarea" rows="4" cols="50" placeholder="Enter text to paraphrase"></textarea>
            <br>
            <button class="btnParaphrase" onclick="paraphrase()">Paraphrase</button>
            <p id="errorText"></p>
            <p class="pp">Paraphrased Text:</p>
            <p id="paraphrasedText"></p>
        </div>
    </section>
    <!-- Footer -->
    <footer>
    <?php
include('footer.php');
?>
</footer>


<!-- <script>
const userId = <?php echo json_encode($_SESSION['id'] ?? ''); ?>;
</script> -->

<script src="js/paraphrase.js"></script>
</body>
</html>
