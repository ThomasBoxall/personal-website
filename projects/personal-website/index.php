<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/global/favicon.png" type="image/x-icon">
    <title>Personal Website | Project| Thomas Boxall</title>
    <link rel="stylesheet" href="/global/global.css">
    <link rel="stylesheet" href="../project-styles.css">
    <script src="https://kit.fontawesome.com/6bd76a095b.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/global/header.php");?>
    <main>
        <h1>Personal Website</h1>
        <div class="top-line">
            <p class="ps-active">active</p>
            <p>Jun '22 - now </p>
            <p><a href="https://github.com/ThomasBoxall/personal-website" target="_blank">View source <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
        </div>
            

        <div class="project-image-gallery">
            <div class="project-image-gallery-card">
                <img src="../assets/pw-v3-home.png" alt="Personal Website Home Page" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/pw-v3-about.png" alt="Personal Website About Page" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/pw-v3-projects.png" alt="Personal Website Projects Page" class="project-image-gallery-image">
            </div>
            <div class="project-image-gallery-card">
                <img src="../assets/pw-v3-cal.png" alt="#CunningCalendarWidget" class="project-image-gallery-image">
            </div>
        </div>
        <div class="lightbox lightbox-hide">
            <button class="close"><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>

        <p>The current iteration of my personal website is actually the third I have created. This is due to me learning as I've gone along and making mistakes or realising there are better ways to do things. The version currently live, while it isn't perfect and there are things I want to change, I'm proud of it.</p>
        <p>My website gives a breif introduction to who I am, what skills I have, projects I have worked on and gives a way to contact me. It also provides a way which my calendar can be viewed, through a custom written #CunningCalendarWidget. The widget combines the publically available ics file from multiple Google Calendars into one view which enables my availability to be easily communicated with these who were scheduling meetings with me.</p>
        <h2>Previous Versions</h2>
        <p>Previous versions of my personal website do still exist and are available below.</p>
        <p>v1: <a href="https://github.com/ThomasBoxall/personal-website-archive/tree/main">Source</a> // <a href="https://personal-website-v1.archive.thomasboxall.dev/">Deployment</a></p>
        <p>v2: <a href="https://github.com/ThomasBoxall/personal-website-archive/tree/rewrite">Source</a> // <a href="https://personal-website-v2.archive.thomasboxall.dev/">Deployment</a></p>

    </main>
    <script src="../lightbox.js"></script>
</body>
</html>