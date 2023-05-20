<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/global/favicon.png" type="image/x-icon">
    <title>Module Grade Calculator | Project| Thomas Boxall</title>
    <link rel="stylesheet" href="/global/global.css">
    <link rel="stylesheet" href="../project-styles.css">
    <script src="https://kit.fontawesome.com/6bd76a095b.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/global/header.php");?>
    <main>
        <h1>Module Grade Calculator</h1>
        <div class="top-line">
            <p class="ps-active">active</p>
            <p>Apr '23 - now </p>
            <p><a href="https://mgc.thomasboxall.net/#/" target="_blank">View live deployment <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
            <p><a href="https://github.com/ThomasBoxall/module-grade-calculator" target="_blank">View source <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
        </div>
        

        <div class="project-image-gallery">
            <div class="project-image-gallery-card">
                <img src="../assets/mgc-web-home-blank.png" alt="Module Grade Calculator blank homepage (web)" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/mgc-web-full.png" alt="Module Grade Calculator full homepage (web)" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/mgc-web-add.png" alt="Module Grade Calculator add assessment page (web)" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/mgc-web-edit.png" alt="Module Grade Calculator edit assessment page (web)" class="project-image-gallery-image">
            </div>
        </div>
        <div class="lightbox lightbox-hide">
            <button class="close"><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>

        <p>Module Grade Calculator is a tool to aid the calculation of overall grades in modules at university.</p>
        <p>It is built using Dart and the Flutter framework. Currently deployed on a custom domain with an Android app as a possibility for the future.</p>
        <p>The app features a home page where the assessments can be viewed, an add assessment feature as well as an edit assessment features. The combined grade from all the added assessments is displayed at the top of the page.</p>
        <p>Future development of this app will see an ability to load template modules which will come pre-filled with the assessments and their percentage weightings.</p>

    </main>
    <script src="../lightbox.js"></script>
</body>
</html>