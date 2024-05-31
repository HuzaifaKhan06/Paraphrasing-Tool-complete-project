<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="CSS/profile.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
<?php
include('head1.php');
?>

        <section id="bodySection1">
            <div class="sectionDiv">
                <ul class="sectionDivUl">
                    <li class="sc"><a href="Paraphrasing.html" class="ScLinks">Paraphrase</a></li>
                    <li class="sc"><a href="summarize.html" class="ScLinks">Summarize</a></li>
                    <li class="sc"><a href="paraphraseFile.html" class="ScLinks">Paraphrase File</a></li>
                    <li class="sc"><a href="simplifyLanguage.html" class="ScLinks">Simplify Language</a></li>
                </ul>
            </div>
        </section>
    <div class="profile-container">
        <h1>User Profile</h1>

        <div class="profile-picture">
            <img src="img/profileImg.png" alt="Profile Picture" id="profile-image">
            <label for="profile-image-upload" class="upload-button">Upload Profile Picture</label>
            <input type="file" id="profile-image-upload" accept="image/*" onchange="previewImage(event)">
        </div>

        <div class="user-details">
            <form id="profile-form">
                <label for="name">Set User Name:</label>
                <input type="text" id="name" placeholder="Your Name">

                <label for="address">Address:</label>
                <textarea id="address" placeholder="Your Address"></textarea>

               

                <button type="button" onclick="saveProfile()">Save Profile</button>
            </form>
        </div>
    </div>
<!-- footer -->
<footer>
<?php
include('footer.php');
?>
    </footer> 

    <script src="js/profile.js"></script>
</body>

</html>
