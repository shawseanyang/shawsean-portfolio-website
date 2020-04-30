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
            <title>Sean - My Story</title>
            
            <style>
                :root {
                    --page-highlight-color: var(--story-highlight-color); /* highlight color for this page */
                    --page-second-highlight-color: var(--story-second-highlight-color); /* secondary highlight color for this page */
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
            <div class="page-header" style="background-image:url('/images/stellar clouds.jpg')" alt="page header image"> 
                <p class="title">My Story</p>
                <p class="subtitle">More About Me</p>
            </div>
            <?php include "parallax-header.php" ?>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <a class="bookmark" id="story-links"></a>
                <div class="content-card" style="margin-top:0; margin-bottom:0;">
                    <div class="content-subcard">
                        <p class="title">Exploring My Interests - Applying Knowledge</p>
                        When I'm not taking on a new <span class="bold">engineering challenge</span>,
                        programming my next <span class="bold">coding project</span>,
                        or applying myself at <span class="bold">school</span>,
                        I'm <span class="bold">exploring my interests</span> in a new field.
                        I enjoy learning new knowledge, but what really interests me is
                        <span class="bold">applying</span> that knowledge to a new project!
                    </div>
                </div>
                <div class="block-image-link-group clearfix" style="background-color:white">
                    <a class="block-image-link" style="background-image:url('/images/howdy-wing.jpg')" alt="page header image" href="/howigothere.php">
                        How I Got Here
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/rocket-launch.jpg')" alt="page header image" href="/motivations.php">
                        What Motivates Me
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/plane-from-below.jpg')" alt="page header image" href="/futuretrajectory.php">
                        Future Trajectory
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                </div>
                <div class="quote-card">
                    <p class="title"><span class="bold">Work</span> (n.) - the measure of <span class="bold">energy transfer</span>.</p>
                </div>
                <div class="content-card">
                    <a class="filled-rounded-button" style="margin-top:0;" href="/projects.php">My Work: Projects</a>
                </div>
                <div class="content-card">
                    The <span class="bold">‘force' (motivation)</span> that propels me in my <span class="bold">'work' 
                    (projects)</span> emerged from my childhood interests while years of <span class="bold">cultivation</span> -
                    the <span class="bold">‘distance’</span> - have matured my ‘work’.
                    Likewise, my interest in <span class="bold">creativity and STEM fuel 
                    my </span><a class="link" href="projects.php"><span class="bold">projects</span></a>.
                    <p style="text-align:center; margin-top:var(card-margin);">Learn about <span class="bold">how I got to where I am</span> with <a class="link" href="#story-links"><span class="bold">the links above</span></a>!</p>
                </div>
                <div class="content-card fullspan-card" style="margin-bottom:0; margin-top:0; padding-bottom:0; text-align:center; background-color:white">
                    <p class="title">Explore More</p>
                </div>
                <?php include "menu-links.php" ?>
            </div>
            <?php include "footer.php" ?>
        </body>
    </html>