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
                <p class="title"><span class="avoidwrapping">Bear Force One:</span><span class="avoidwrapping"> RV-12 Aircraft</span></p>
                <p class="subtitle">Projects</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">Building Bear Force One</p>
                    As a kid, my family and I flew often, and I've been fascinated with planes ever since.
                    During my sophomore year, I enrolled in <span class="bold">Aerospace Engineering</span>, where my <span class="bold">fellow classmates and I built a real,
                    flyable, FAA-certified light sport airplane</span>, which we named Bear Force One.
                    I was also fortunate to be part of a small group of students that <span class="bold">flew our plane halfway across the United States with our mentors</span>.
                    Bear Force One is an RV-12, a two-seat single-engine plane ideal for recreational and training pilots.
                    <img src="/images/aerospace-class.jpg">
                    <figcaption>The class with Bear Force One, ready to be painted</figcaption>
                </div>
                <div class="content-card">
                    <p class="title">Takeaways</p>
                    With the guidance of our teachers and mentors, we learned <span class="bold">hands-on skills (like riveting metal, keeping clean documentation, and other shop tasks)</span>
                    and gained in-depth <span class="bold">knowledge of the plane's construction</span>.
                    To accomplish this project, we collaborated in teams on different components through the course of the school year.
                    My specific team built the rudder, right wing, part of the center section, the wheels, control wires for the rudder, and the landing lights.
                </div>
                <div class="content-card" style="text-align:center;">
                    <div class="content-subcard">
                        More important than the material takeaways though, I learned the importance of <span class="bold">building networking connections</span> through the program.
                        My <span class="bold">Aerospace Engineering teacher</span> always emphasized,
                    </div>
                    <div class="quote-card">
                        <p class="title">"It's <span class="bold">not what</span> you know, it's <span class="bold">who you know</span>."</p>
                    </div>
                    <div class="content-subcard">
                        This struck a chord with me and motivated me to <span class="bold">keep in contact with my teachers, classmates, and colleagues</span>. In fact, I was <span class="bold">inspired to build this portfolio website</span>
                        <jump to web dev> by various connections.
                        First, a friend of mine introduced me to web development,
                        then my AP Computer Science teacher inspired the idea to create a portfolio.
                    </div>
                </div>
                <div class="content-card">
                    <p class="title">Airventure Oshkosh 2018</p>
                    <div class="content-subcard" style="padding-top:0;">
                        <p class="title">Showcasing Our Bear Force One</p>
                        As a culmination to this RV-12 project, a small group of students - including myself -
                        <span class="bold">flew our homebuilt Bear Force One with our mentors to EAA AirVenture Oshkosh 2018</span> in Wisconsin.
                        The airshow is renowned as the <span class="bold">largest gathering of aviation enthusiasts and aircraft in the US</span>.
                        From human-sized drones to a 757 modified for jet engine testing, the airshow hosted a variety of experimental aircraft.
                        Among them, <span class="bold">we showcased our plane</span> to show-goers and were treated to delicious Wisconsin cheese curds along the way!
                    </div>
                    <img src="/images/rv-12-oshkosh.jpg">
                    <figcaption>The RV-12 on display at Airventure Osh Kosh 2018</figcaption>
                </div>
                <div class="content-card">
                    <p class="title">Cross-Country Flight</p>
                    One of the coolest highlights of this trip was the journey there. Through this <span class="bold">cross-country flight,
                    I gained more flight time piloting at the yoke than I had driven at the wheel of a car at the time!</span>
                    The entire trip was <span class="bold">breathtaking</span> from start to finish -
                    from the special experience, and the wealth of aviation knowledge, to the magnificent views.
                </div>
                <div class="content-card flex-column" style="width:50vw; margin-left:auto; margin-right:auto; padding:0;">
                    <img src="/images/rv-12-selfie1.jpg">
                    <img src="/images/rv-12-selfie2.jpg">
                </div>
                <div class="content-card" style="padding:0; text-align:center">
                    <figcaption>(right) Flying aboard Bear Force One.</figcaption>
                </div>
                <div class="content-card">
                    Regular commercial flights may feel peaceful and routine, but when you're at the controls yourself, a tension of exciting tranquility takes over.
                    The skies were beautifully calm, but I was <span class="bold">burning to learn more</span> and soak in the moment! 
                    This trip futhered my interest in general aviation and <span class="bold">a dream</span> of someday owning my own plane.
                    Plus, it was a strong <span class="bold">team-building</span> occasion with my network of teammates and mentors. 
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