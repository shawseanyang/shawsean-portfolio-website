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
            <div class="page-header" style="background-image:url('/images/mc-cubed-787.jpg')" alt="page header image"> 
                <p class="title">Minecraft Realism</p>
                <p class="subtitle">Interests</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">Digital 3D Sculpting</p>
                    <div class="content-subcard">
                        As my tool for <span class="bold">digital 3D sculpting</span>, I use the game <span class="bold">Minecraft</span> as a medium to create:
                        to create and express my love of <span class="bold">aviation and architecture</span> through three-dimensional building. 
                    </div>
                    <div class="content-subcard">
                        <p class="title">Realism & Detail</p>
                        Although Minecraft is traditionally a game renowned for its popularity, <span class="bold">my usage is not traditional</span>.
                        I use it to create builds that exemplify <span class="bold">realism</span> and attention to <span class="bold">detail</span>. 
                    </div>
                    <div class="content-subcard">
                        <p class="title">Architecture & Airplanes</p>
                        This platform was my introduction to the world of architecture through which I have gained an increased awareness of architectural elements.
                        With this, I contribute to large, master-planned <span class="bold">city realism projects</span>. I also use Minecraft to build 
                        <span class="bold">realistic full-scale models of aircraft</span>.
                        Combining my interest in commercial aviation and my love of creative design, I have replicated a wide array of aircraft, from 787’s, to A320’s, to 777’s, to A220’s.
                    </div>
                </div>
                <div class="content-card">
                        <p class="title">Introduction to Programming</p>
                        Extended from my love of the game in middle school, I became <span class="bold">intrigued by its inner workings</span>.
                        I installed modifications and scoured the source code. I was amazed with <span class="bold">how artistic design and technical wizardry
                        came together to make a video game</span>. Determined to learn more, <span class="bold">I taught myself Python</span>.
                        That was the beginning of my foray into <a class="link" href="/programming.php">programming</a>.
                </div>
                <div class="image-grid">
                    <p style="text-align:center; color:var(--slightly-light-gray-color);">Hover or tap to see captions</p>
                    <div class="row">
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Japan Airlines 787<p class="desc">A realistic recreation of the Boeing 787 Dreamliner</p></div><img src="/images/mc-jal.jpg"></div>
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Boeing 777<p class="desc">A scale Boeing 777 - one of the most popular long-haul airliners</p></div><img src="/images/mc-qantas-color.jpg"></div>
                    </div>
                    <div class="row">
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">787 Side Shot</p><p class="desc">A side shot of the front fuselage and engine of the 787 Dreamliner</p></div><img src="/images/mc-cubed-787.jpg"></div>
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Sunken Station Plaza<p class="desc">The minimalist sunken outdoor plaza from one of my train stations</p></div><img src="/images/mc-station.jpg"></div>
                    </div>
                    <div class="row">
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">A320neo Winglet<p class="desc">The trailing edge and "sharklet" winglet of the A320neo</p></div><img src="/images/mc-wing1.jpg"></div>
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">777 Wing Flex<p class="desc">The engine, trailing edge, flap track fairings, and wing tip of the 777</p></div><img src="/images/mc-wing2.jpg"></div>
                    </div>
                    <div class="row">
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Boeing 757<p class="desc">A classic narrow-body airliner with a distinctive nose and shape</p></div><img src="/images/mc-757.jpg"></div>
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Jetways<p class="desc">A realistic dual jetway gate from one of my airport projects</p></div><img src="/images/mc-jetways.jpg"></div>
                    </div>
                    <div class="row">
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">White Metro Platforms<p class="desc">Underground metro station platforms with orange highlights and high center ceiling. </p></div><img src="/images/mc-andea-central-platforms.jpg"></div>
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Marina Transit Hub<p class="desc">With a renovated industrial style, this hub joins subway, light rail, cruise terminal, and buses</p></div><img src="/images/mc-marina-above.jpg"></div>
                    </div>
                    <div class="row">
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Marina Transit Hub Platforms<p class="desc">Sunken platforms of the marina transit hub join brick, concrete, and exposed beams</p></div><img src="/images/mc-marina-platforms-close.jpg"></div>
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Underground Station Platforms<p class="desc">Warm underground train platforms lined with a ceiling of curved wood panels and an arched skylight above</p></div><img src="/images/mc-platforms.jpg"></div>
                    </div>
                    <div class="row">
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">San Diego International<p class="desc">Terminal Two of my work-in-progress scale recreation of San Diego International Airport</p></div><img src="/images/mc-sandiego.jpg"></div>
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Inside San Diego Intl<p class="desc">Inside the rotunda of my recreation of San Diego International Airport</p></div><img src="/images/mc-sandiego-inside.jpg"></div>
                    </div>
                    <div class="row">
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Stone Metro Station<p class="desc">Underground metro station platforms with illuminated panels against natural stone walls.</p></div><img src="/images/mc-t8-station.jpg"></div>
                        <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Contemporary Lake House<p class="desc">An open-layout home on short stilts with floor-to-ceiling windows facing the waterfront</p></div><img src="/images/mc-house.jpg"></div>
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