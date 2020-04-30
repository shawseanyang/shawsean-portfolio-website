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
            <title>Sean - Interests</title>
            
            <style>
                :root {
                    --page-highlight-color: var(--interests-highlight-color); /* highlight color for this page */
                    --page-second-highlight-color: var(--interests-second-highlight-color); /* secondary highlight color for this page */
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
            <div class="page-header" style="background-image:url('/images/female-face.jpg')" alt="page header image"> 
                <p class="title">Drawing</p>
                <p class="subtitle">Interests</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">As A Hobby</p>
                    Over the years, I have casually developed my art by <span class="bold">drawing as a hobby</span>.
                    My mediums include <span class="bold">graphite</span>-on-paper and <span class="bold">digital</span> tablet drawing.
                </div>
                <div class="content-card">
                    <p class="title">Clean Sketching</p>
                    This development of artistic coordination and spatial awareness also 
                    <span class="bold">benefits my engineering sketches</span> by allowing me to communicate my ideas more effectively.
                    The information presented may be the same, but a clean diagram is <span class="bold">clearer</span>.
                </div>
                <div class="image-grid">
                        <p style="text-align:center; color:var(--slightly-light-gray-color);">Hover or tap to see captions</p>
                        <div class="row">
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">An Anthropomorphic Portrait<p class="desc">A digital painting inked and painted in color</p></div><img src="/images/selfie-drawover.jpg"></div>
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Rocket Racoon<p class="desc">From the movie, Guardians of the Galaxy. Painted by blocking in on top of a sketch digitally. </p></div><img src="/images/rocket-racoon.jpg"></div>
                        </div>
                        <div class="row">
                            <div class="cell"><div class="title">Monochromatic Woman<p class="desc">A digital painting done without previous sketches and shaded in grayscale</p></div><img src="/images/female-face.jpg"></div>
                            <div class="cell"><div class="title">A Striking Pose<p class="desc">Another digital anthropomorphic piece but colored with additive layers of shade and tint</p></div><img src="/images/side-strike.jpg"></div>
                        </div>
                    </div>
                <div class="content-card fullspan-card" style="margin-bottom:0; margin-top:0; padding-bottom:0; text-align:center; background-color:white">
                    <p class="title">Explore More</p>
                    <a class="filled-rounded-button" href="/interests.php">&larr; Interests</a>
                </div>
                <?php include "menu-links.php" ?>
            </div>
            <?php include "footer.php" ?>
        </body>
    </html>