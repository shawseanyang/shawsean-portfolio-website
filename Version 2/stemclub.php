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
            <div class="page-header" style="background-image:url('/images/stem-club-group.jpg')" alt="page header image"> 
                <p class="title">Founding STEM Club</p>
                <p class="subtitle">Projects</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="quote-card">
                    <p class="title"><span class="lighten">Problem:</span> Lack of student-led STEM activities</p>
                </div>
                <div class="content-card">
                    Our school <span class="bold">lacked a good volume of student-led STEM activities</span>.
                    I was and still am heavily invested in STEM-related activities, but there were <span class="bold">barely any extracurriculars that connected it to the larger school community</span>.
                    We had excellent enginering courses, but nowhere to continue the momentum outside of class -
                    thus, I saw <span class="bold">an unfilled niche</span>
                </div>
                <div class="quote-card">
                    <p class="title"><span class="lighten">Solution:</span> <span class="bold">STEM Club</span> to promote STEM enrichment!</p>
                </div>
                <div class="content-card">
                    Through this organization, <span class="bold">we promote STEM education and enrichment</span> through practical <span class="bold">projects</span>
                    (for example, designing and building a raspberry pi laptop) and <span class="bold">field trips</span>.
                </div>
                <div class="content-card">
                    <p class="title">Learning to Inspire</p>
                    While building <span class="bold">this club from the ground up</span>, I learned <span class="bold">how to inspire club members to realize their potential</span> -
                    by organizing exciting activities that <span class="bold">draw students' interests</span>.
                    It's always fulfilling to see a club memeber improve at installing operating systems,
                    drawing dimensioned sketches, or woodworking. 
                </div>
                <div class="content-card">
                    <p class="title">Learning to Lead</p>
                    I learned to <span class="bold">take the lead on managing organizational structure</span>,
                    defining group goals, orchestrating projects, and promoting communication.
                    We have a <span class="bold">tight-knit membership</span> and use Discord (a server-based team messaging service) to communicate.
                    Using my history of leadership in other clubs, I am furthering my experience in team management through this club.
                </div>
                <div class="content-card">
                    <img src="/images/stem-club-laptop.jpg">
                    <figcaption>Raspberry pi laptop under construction with the frame on top of the briefcase. The LCD Controller is visible. All electronics are detachable.</figcaption>
                    <p class="title"><span class="lighten">First Project:</span> Raspberry Pi Laptop</p>
                    We are currently working on our first project: a raspberry pi laptop <span class="bold">designed and built ourselves!</span>
                    We challenged ourselves with using <span class="bold">reporpused parts -
                    a briefcase, wooden boards, and even an old power strip</span>.
                    Our club members split up into three groups, one building the case,
                    another arranging and managing the electronics, and another configuring the software.
                    With the parts being repurposed, one major consideration we had to make was the internal arrangement
                    of components to make sure everything would fit, which called for clear <span class="bold">spacial planning</span>.
                </div>
                <div class="content-card fullspan-card" style="margin-bottom:0; margin-top:0; padding-bottom:0; text-align:center; background-color:white">
                    <p class="title">Explore More</p>
                    <a class="filled-rounded-button" href="/projects.php">&larr; Projects</a>
                </div>
                <?php include "menu-links.php" ?>
            </div>
            <?php include "footer.php" ?>
        </body>
    </html>