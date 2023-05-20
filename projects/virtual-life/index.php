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
        <h1>Virtual Life</h1>
        <div class="top-line">
            <p class="ps-active">active</p>
            <p>Apr '21 - May '22 </p>
        </div>
        <div class="top-line">
            <p class="ps-archive">archive</p>
            <p>May '22 - now </p>
            <p><a href="https://github.com/ThomasBoxall/virtual-life" target="_blank">View source <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
        </div>

        <div class="project-image-gallery">
            <div class="project-image-gallery-card">
                <img src="../assets/vl-home.png" alt="Virtual-Life Main Menu" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/vl-new.png" alt="Virtual-Life New Game Creation Page" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/vl-main-home.png" alt="Virtual-Life Main game screen" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/vl-crime.png" alt="Virtual-Life Crime page" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/vl-jobs.png" alt="Virtual-Life Jobs page" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/vl-choice.png" alt="Virtual-Life Choice Box" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/vl-death.png" alt="Virtual-Life Death" class="project-image-gallery-image">
            </div>
            
        </div>
        <div class="lightbox lightbox-hide">
            <button class="close"><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>

        <p>Virtual-Life is a life simulator game, built for my A-Level Computer Science project</p>
        <p>It's built using C# and WinForms with the .NET framework</p>
        <p>The game allows players to create a new life, either by random generation or by entering details themself, increase the characters age, view basic information about the characters family, alter the characters education pathway, commit crime, get a job and get a partner. There were other features planned however due to time constraints of an A-Level project, these didn't happen.</p>

    </main>
    <script src="../lightbox.js"></script>
</body>
</html>