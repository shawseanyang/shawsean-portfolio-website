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
            <div class="page-header" style="background-image:url('/images/model2_green.jpg'); background-position:top center;" alt="page header image"> 
                <p class="title">RC Model Planes</p>
                <p class="subtitle">Projects</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="page-table-of-contents">
                    <ul>
                        <li><p class="title">On This Page</p></li>
                        <li><a class="link" href="#rcplane">Ideation</a></li>
                        <li><a class="link" href="#research&fabrication">Research & Fabrication</a></li>
                        <li><a class="link" href="#model1">Model #1</a></li>
                        <li><a class="link" href="#model2">Model #2</a></li>
                    </ul>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="rcplane"></a>
                    <p class="title">Building a Remote Control Plane</p>
                        Inspired by our <a class="link" href="/rv12.php">RV-12 build</a> and empowered by my engineering curriculum, I designed and constructed a small, foam, <span class="bold">remote-controlled model plane</span> from scratch.
                        Since this was my <span class="bold">first experience in</span> the field of <span class="bold">remote-controlled planes</span>,
                        I opted for a <span class="bold">high-wing, single motor design</span>. 
                        This configuration would provide a more direct assembly process.
                        The single motor saves on the extra costs and complexity related to a second motor while
                        the <span class="bold">high-wing</span> structure is <span class="bold">easily separable</span> for storage.
                </div>
                <div class="quote-card">
                    <p class="title">“Sometimes you <span class="bold">make the right decision</span>, sometimes you <span class="bold">make the decision right</span>.”</p>
                    <p style="text-align:center">- Phil McGraw</p>
                </div>
                <div class="content-card" style="text-align:center">
                    But sometimes, like in the case of this project, you do <span class="bold">both</span>. <span class="bold">I planned</span> thoroughly,
                    making the <span class="bold">right decisions</span>,
                    but I also <span class="bold">adapted</span> to rising obstacles, <span class="bold">making the decisions right</span>.
                </div>
                <div class="content-card">
                    <a class="bookmark" id="research&fabrication"></a>
                    <p class="title">Research and Fabrication</p>
                    <div class="content-subcard">
                        <p class="title">The Vision</p>
                        Through the duration of this project, I cut so much foam that I could qualify as a <span class="bold">foam-cutting guru!</span> 
                        More importantly, though, I applied the <span class="bold">engineering process</span> and <span class="bold">systematic problem-solving</span>
                        to <span class="bold">successfully accomplish my vision</span>.
                    </div>
                    <div class="content-subcard">
                        <img src="/images/rc1-sketch.jpg">
                        <figcaption>Original sketches for the first RC model plane.</figcaption>
                        <p class="title">The Plan</p>
                        I began by thoroughly <span class="bold">researching</span> and brainstorming solutions to achieve this goal - this step took a <span class="bold">month.</span>
                        I considered choices like <span class="bold">motor</span> count, <span class="bold">wing</span> and <span class="bold">electronics</span> configurations,
                        and specificities like how to join <span class="bold">perpendicular foam pieces</span>.
                        After I settled on a finalized idea,
                        I sketched a detailed drawing outlining the components and appearance of the plane. 
                        I mapped out the entire plan on paper <span class="bold">before ever bringing an x-acto knife to foam</span>.
                    </div>
                </div>
                <div class="content-card">
                    <p class="title">Common Items</p>
                    <span class="bold">Pool noodles, popsicles, plastic bottles</span> - I used them all!
                    During the <span class="bold">design</span> and fabrication process,
                    I frequently <span class="bold">solved new constraints</span> like cost or strength through adaptation. 
                    Due to the low budget for my project, I often reused common items as components.
                    For example, I chose to use <span class="bold">rubber bands</span> to attach the wings to the fuselage for flexibility and removability,
                    I employed <span class="bold">zip-ties</span> and <span class="bold">popsicle sticks</span> to establish a solid support structure for the engine mount and gear struts,
                    and I combined <span class="bold">pool noodles with plastic bottle caps</span> to form large wheels!
                    That was the day popsicle sticks and pool noodles flew!
                </div>
                <div class="content-card">
                    <a class="bookmark" id="model1"></a>
                    <img src="/images/model1iso.jpg">
                    <figcaption>My first model plane, built with foam board, popsicle sticks, pool noodles, and piano wire.</figcaption>
                    <p class="title">Product</p>
                    As my <span class="bold">first long-term</span>, extracurricular, solo project, I learned how to 
                    <span class="bold">plan multifaceted projects and execute them accordingly</span>.
                    In designing from scratch, I learned to work with minimal guidance and developed confidence for future projects.
                    Furthermore, the many hurdles taught me <span class="bold">flexible</span> problem-solving. 
                    For instance, I opted to use <span class="bold">plastic toothpicks</span> as the lever mechanism for the control surfaces and <span class="bold">popsicle sticks</span>
                    for all the areas that needed <span class="bold">wooden reinforcement</span> instead of traditional materials.
                </div>
                <div class="content-card">
                    <a class="bookmark" id="model2"></a>
                    <img src="/images/model2iso.jpg">
                    <figcaption>My second model plane, converted from a foam glider with the addition of a motor and control surfaces.</figcaption>
                    <p class="title">Model #2: Powered Glider</p>
                    I helped build one real plane, I built another model plane … so the <span class="bold">next step</span> is to build a third!
                    Applying the lessons I learned from my first RC build, I began designing <span class="bold">a second model plane</span>.
                    It is a heavy <span class="bold">adaptation</span> of a toy foam <span class="bold">glider</span> meant for hand-launching.
                </div>
                <div class="content-card">
                    <p class="title">Features</p>
                    To convert the glider <span class="bold">into a remote-controlled model</span>, I removed the <span class="bold">nose</span>, mounted a <span class="bold">motor</span>,
                    attached the <span class="bold">electronic</span> circuitry, and modified the flight surfaces to incorporate <span class="bold">control surfaces</span> - like elevons and a rudder.
                    Like its predecessor, I used plastic toothpicks and piano wire to control the moving surfaces, but unlike the previous, I also incorporated
                    <span class="bold">3D-Printing</span>! I designed a rectangular motor mount with three holes to accommodate the screws of the motor. 
                    This motor mount was then fitted into the nose of the glider to form a strong hold.
                    Otherwise, the foam itself would have been too soft to keep the propeller from flying off!
                </div>
                <div class="content-card">
                    <p class="title">Improvements</p>
                    Since this second model builds on the experience I garnered from the first, it is substantially <span class="bold">more optimized</span>.
                    I have <span class="bold">condensed the control surfaces</span> into fewer mechanical parts
                    while <span class="bold">reducing redundant weight</span>. 
                    The first model had too much hot glue on it - it was a sticky situation! This time around, I opted for velcro and tiny screws to save weight.
                    This build is almost complete and I am <span class="bold">excited to see it fly!</span>
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