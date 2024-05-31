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
                <li class="sc"><a href="summarize.php" class="ScLinks ">Summarize</a></li>
                <li class="sc"><a href="paraphraseFile.php" class="ScLinks ">Paraphrase File</a></li>
                <li class="sc"><a href="simplifyLanguage.php" class="ScLinks ">Simplify Language</a></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="container">
            <h1 class="sumarizerH1">Summarizer Tool</h1>
            <textarea id="inputText" class="textareaSummarizer" placeholder="Paste your text here..."></textarea>
            <button class="btnSummarize" onclick="summarize()">Summarize</button>
            <h2 class="sumarizerH2">Summary</h2>
            <p id="summary"></p>
        </div>
    </section>
    <!-- footer -->
    <footer>
    <?php
include('footer.php');
?>
        </footer> 
    <script src="js/summarize.js"></script>
</body>
</html>

