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
                <li class="sc"><a href="simplifyLanguage.php" class="ScLinks">Simplify Language</a></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="container2">
            <h1 class="fileh1">Upload File To Paraphrase</h1>
            <button class="fileButton">Choose File <input type="file" id="fileInput" accept=".txt, .docx"> </button>
            
            <br>
            <span id="uploadIcon">&#x1F4C2;</span> 
            <br>
            <button class="btnFile" onclick="paraphrase()">Paraphrase</button>
            <br>
            <span id="downloadIcon">&#x1F4BE;</span> 
            <p id="result"></p>
            <a id="downloadLink" style="display: none;" download="paraphrased_text.txt">
                <button class="btnDownload" onclick="downloadParaphrasedText()">Download Paraphrased File</button>
            </a>
        </div>
    </section>

<!-- footer -->
<footer>
<?php
include('footer.php');
?>
    </footer> 
        <script src="js/fileParaphrase.js"></script>
</body>
</html>

