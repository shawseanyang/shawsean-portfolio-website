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
            <div class="page-header" style="background-image:url('/images/young-eagles-flight.jpg')" alt="page header image"> 
                <p class="title">Aviation</p>
                <p class="subtitle">Interests</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">Love of Airplanes</p>
                    My frequent flying had another implication: my <span class="bold">love of airplanes!</span>
                    From my involvement in the <a class="link" href="/rv12.php"><span class="bold">RV-12 build</span></a>,
                    to my <a class="link" href="/rcplanes.php"><span class="bold">RC planes</span></a>,
                    to my appreciation of planes as beautiful <span class="bold">works of art</span> and engineering,
                    my interest in aviation is clear! <span class="bold">Long flights</span> may just be the <span class="bold">bane of my camera roll</span>
                    because I take <span class="bold">so many pictures</span>!
                </div>
                <div class="content-card">
                    <img src="/images/787-wing.jpg">
                    <p class="title">Graceful and elegant</p>
                    As <span class="bold">works of art and engineering</span>, 
                    I admire the <span class="bold">visual</span>, <span class="bold">technical</span>, and <span class="bold">logistical aspects</span> of air travel.
                    If my collection of thousands of photos from flights says anything,
                    its that I love the <span class="bold">elegance</span>, <span class="bold">power</span>, and <span class="bold">rhythms</span> of a plane.
                    The deflection of the <span class="bold">wing floating on the wind</span>, the graceful <span class="bold">sailing</span>, 
                    and the calm peace surrounded by <span class="bold">serene</span> and whispy <span class="bold">clouds</span> are just snapshots of their charm.
                </div>
                <div class="content-card flex-column">
                    <div>
                        <img src="/images/rv-12-lchs.jpg">
                        <figcaption>Bear Force One, the RV-12 plane built by my classmates and I with our mentors.</figcaption>
                    </div>
                    <div>
                        <img src="/images/young-eagles-flight.jpg">
                        <figcaption>Flying with one of our mentors</figcaption>
                    </div>
                </div>
                <div class="content-card">
                    <p class="title">Civil Aviation</p>
                    My interest in aviation is strongest towards <span class="bold">commercial airliners</span>.
                    However, through the <a class="link" href="rv12.php"><span class="bold">RV-12 program</span></a>,
                    I have gained a new curiosity about the <span class="bold">recreational and private side</span> of aviation.
                </div>
                <div class="content-card">
                    <p class="title">Technical and Logistical</p>
                    In the past, I would take <span class="bold">pictures at the airport or on the plane</span> just to record the little details that I noticed.
                    In the logistic sense, airliners stand as a testament to the <span class="bold">engineered systems</span> that bring goods, passengers,
                    and supplies together to make a flight successful: from the <span class="bold">design of airports</span>, to the <span class="bold">movements of people and luggage</span>.
                    This, to me, is an <span class="bold">intriguing and insightful topic</span> to learn about. After all, airports are the <span class="bold">arteries of modern travel</span>!
                </div>
                <div class="content-card">
                    <p class="title">Design Details</p>
                    There are many <span class="bold">minute design considerations</span> in airports and other transit hubs alike that are so subtle yet so important!
                    The average traveler may not pay much attention to the <span class="bold">location and typography of signs</span> or the <span class="bold">colors of the interior</span>.
                    <div class="quote-card">
                        <p class="title"><span class="bold">Good design</span> is <span class="lighten">invisible.</span></p>
                    </div>
                    They may only <span class="bold">notice</span> these details when there is <span class="bold">bad design</span> because <span class="bold">good design is invisible</span>.
                    As such, air travel is one of my deepest interests.
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