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
            <div class="page-header" style="background-image:url('/images/wengen.jpg')" alt="page header image"> 
                <p class="title">Traveling</p>
                <p class="subtitle">Interests</p>
            </div>
            <?php include "parallax-header.php" ?>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">Travel</p>
                    Airports, train stations, roads, planes, trains, and cars!
                    <span class="bold">Frequently traveling as a kid</span> gave me a keen interest in traveling.
                    The <span class="bold">journey</span> is just as important as the <span class="bold">destination</span>!
                </div>
                <div class="content-card">
                    <p class="title">Architecture</p>
                    Beyond the obvious leisure of a vacation, <span class="bold">I appreciate the architecture, transportation, and cuisine</span> of where I visit.
                    I love sightseeing buildings, which combine <span class="bold">engineering and artistic design</span> -
                    from <span class="bold">Modern</span>, to <span class="bold">Minimalist</span>, to <span class="bold">Renaissance</span>, to <span class="bold">International</span> skyscrapers.
                    Every new <span class="bold">city</span> and every new place has <span class="bold">its own architecture</span> to offer!
                </div>
                <div class="content-card">
                    <img src="/images/787-wing.jpg">
                    <p class="title">Transport Enthusiast</p>
                    Although most may despise cramped flights, boring train rides, and long road trips, <span class="bold">I cherish the journey as much as the destination!</span>
                    I see these modes of transportation as <span class="bold">art themselves</span> while the ride provides <span class="bold">photos</span> and leisure.
                    There's that certain atmosphere of a road trip or at the <span class="bold">start of a vacation</span>.
                </div>
                <div class="content-card">
                    <img src="/images/vegas-deep-dish.jpg">
                    <figcaption>Delicious deep dish pizza</figcaption>
                    <p class="title">Foodie</p>
                    Waiting <span class="bold">at the end of a long journey is the food</span>! The cuisine at a destination is an equally important aspect of the vacation experience.
                    Who could skip on rich <span class="bold">lox</span> sandwiches, juicy <span class="bold">burgers</span>, <span class="bold">deep dish</span> pizzas,
                    refreshing <span class="bold">sushi</span>, or creamy <span class="bold">clam chowder</span>?
                    Even more than I am a 'transport enthusiast', my family and I are <span class="bold">'foodies'</span>!
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