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
                }
                .page-header > .title:after {
                    background-color: none;
                    
                    background: linear-gradient(to right, var(--blue-highlight-color), var(--dark-blue-highlight-color));
                }
            </style>
        </head>
        <script>
            function onLoadFunction() {
                window.onscroll = function() {NavBarScrollFunction(); ParallaxFunction();};
            }
        </script>
        <body onload="onLoadFunction();">
            <div class="page-header" style="background-image:url('/images/plane-from-below.jpg')" alt="page header image"> 
                <p class="title">My Future Trajectory</p>
                <p class="subtitle">My Story</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">Next Stop: Lift Off!</p>
                    <div class="content-subcard">
                        <p class="title">In High School ...</p>
                        I took the initiative to engage the school community by establishing our
                        <a class="link" href="/stemclub.php"><span class="bold">district's first STEM Club</span></a>.
                        We have completed our <span class="bold">first projects</span> -
                        including <span class="bold">designing and building a Raspberry Pi laptop</span>. 
                    </div>
                    <img src="/images/stem-club-group.jpg">
                    <figcaption>Group picture from a STEM Club meeting</figcaption>
                    <div class="content-subcard">
                        <p class="title">In College ...</p>
                        I will <span class="bold">major in computer science</span>.
                        I am excited to launch my career in a <span class="bold">growing industry</span>
                        that will only expand as the prevalence and applications of computers continue to rise.
                        During my NASA SEES internship, what struck me one of the most rewarding aspects was the
                        <span class="bold">intellectual spark and team coherence</span> that made the work <span class="bold">highly productive and enjoyable</span>.
                        As such, I am <span class="bold">eager to contribute to</span> a <span class="bold">similarly talented community in college</span>.
                    </div>
                    <div class="content-subcard">
                        <p class="title">Past College ...</p>
                         I am preparing for a career based in <span class="bold">applied computer science</span>.
                         My <span class="bold">dream</span> would be to <span class="bold">develop software</span> in the <span class="bold">aerospace industry</span>.
                         This would combine my aspirations in computer science with my interests in aviation.
                    </div>
                </div>
                <div class="content-card fullspan-card" style="margin-bottom:0; margin-top:0; padding-bottom:0; text-align:center;">
                    <p class="title">More of My Story</p>
                </div>
                <div class="block-image-link-group clearfix" style="margin-top:0; margin-bottom:0;">
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
                <div class="content-card fullspan-card" style="margin-bottom:0; margin-top:0; padding-bottom:0; text-align:center; background-color:white;">
                    <p class="title">Explore More</p>
                </div>
                <?php include "menu-links.php" ?>
            </div>
            <?php include "footer.php" ?>
    </body>
</html>