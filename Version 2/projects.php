<!doctype html>
    <html lang="en">
        <head>
            <!-- standard css variables -->
            <link rel="stylesheet" type="text/css" href="/styles/standard-variables.css">
            <!-- standard stylesheets -->
            <link rel="stylesheet" type="text/css" href="/styles/standard-classes.css">
            <!-- font awesome icons -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <!-- web browser tab icon, favicon -->
            <link rel="icon" href="/favicon.ico" sizes="16x16"/>
            <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
            
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Sean's Personal Portfolio Website.">
            <meta name="keywords" content="Sean, Portfolio">
            <title>Sean - Projects</title>
            
            <style>
                :root {
                    --page-highlight-color: var(--projects-highlight-color); /* highlight color for this page */
                    --page-second-highlight-color: var(--projects-second-highlight-color); /* secondary highlight color for this page */
                }
                .page-header > .title:after {
                    background-color: none;
                    
                    background: linear-gradient(to right, var(--page-highlight-color), var(--page-second-highlight-color));
                }
            </style>
        </head>
        <script>
            function onLoadFunction() {
                window.onscroll = function() {NavBarScrollFunction(); ParallaxFunction();};
            }
        </script>
        <body onload="onLoadFunction();">
            <div class="page-header" style="background-image:url('/images/rv-12-lchs.jpg')" alt="page header image"> 
                <p class="title">Projects</p>
                <p class="subtitle">My activities and endeavors!</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">The Fruits of My Passions</p>
                    A <span class="bold">common theme among my projects is STEM</span>, which is at the crossroads of creativity and technicality.
                    I am drawn to STEM by the prospect of creating and designing through an organized process.
                    <span class="bold">My projects are the fruits of my passions</span>,
                    where I can <span class="bold">express my interests by combining them with my extracurriculars</span>.
                </div>
                <!--<div class="content-card fullspan-card" style="margin-bottom:0; margin-top:0; padding-bottom:0; text-align:center;">
                    <p class="title">Projects</p>
                </div>-->
                <div class="block-image-link-group clearfix" style="margin-top:0;">
                    <a class="block-image-link" style="background-image:url('/images/bastrop-field.jpg')" alt="page header image" href="/nasasees.php">
                        NASA SEES Internship
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/rv-12-lchs.jpg')" alt="page header image" href="/rv12.php">
                        Bear Force One: RV-12 Aircraft
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/stem-club-group.jpg')" alt="page header image" href="/stemclub.php">
                        Founding STEM Club
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/css-code.jpg')" alt="page header image" href="/programming.php">
                        Programming
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/javascript-code.png')" alt="page header image" href="/programming.php#webdev">
                        Web Development
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/robot-stack.jpg')" alt="page header image" href="/programming.php#robotics">
                        Competition Robotics
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/model2_green.jpg')" alt="page header image" href="/rcplanes.php">
                        RC Model Planes
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/nhs-logo-long.jpg'); background-position: center top;" alt="page header image" href="/extracurriculars.php">
                        <span class="avoidwrapping">Extra</span><span class="avoidwrapping">curri</span><span class="avoidwrapping">culars</span>
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/tshirts-front.jpg')" alt="page header image" href="/extracurriculars.php#tshirts">
                        T-Shirt Design
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                </div>
                <div class="content-card fullspan-card" style="margin-bottom:0; margin-top:0; padding-bottom:0; text-align:center; background-color:white;">
                    <p class="title">Explore More</p>
                </div>
                <?php include "menu-links.php" ?>
            </div>
            <?php include "footer.php" ?>
        </body>
    </html>