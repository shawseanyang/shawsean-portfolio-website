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
            <div class="page-header" style="background-image:url('/images/rocket-launch.jpg')" alt="page header image"> 
                <p class="title">What Motivates Me</p>
                <p class="subtitle">My Story</p>
            </div>
            <?php include "parallax-header.php" ?>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">Why STEM? Why Computer Science?</p>
                    <span class="bold">I draw as a hobby</span> because I love to create. 
                    <span class="bold">But, it will remain a hobby because it lacks the structure of STEM</span>. 
                    That structure requires the <span class="bold">application of knowledge</span> in a specific way <span class="bold">to achieve a specific result</span>.
                </div>
                <div class="quote-card">
                    <p class="title">You can <span class="bold">paint without a perfect plan</span>, but you <span class="bold">can't code without a clear cause</span>.</p>
                </div>
                <div class="content-card">
                    <p class="title">STEM = Art + Knowledge -> Product</p>
                    I value how <span class="bold">STEM combines</span> the creativity of <span class="bold">the arts</span> and the knowledge of <span class="bold">academia</span> to produce a <span class="bold">specific result</span> in a specific way.
                    Thus, through STEM, I use the building blocks of my childhood to satisfy my self-motivation. <span class="bold">Computer science</span> extends this foundation to its furthest, 
                    constantly <span class="bold">growing and evolving</span> - which calls for continued creativity.
                    <span class="bold">End-users connect</span> with websites, apps, and software <span class="bold">through the user-interface</span>.
                    This user-interface is the <span class="bold">interface between technology and art</span>. UX is both an art and a research field, <span class="bold">from aesthetics to eye movement patterns</span>.
                </div>
                <div class="content-card flex-column">
                    <div>
                        <img src="/images/website-sketches.jpg">
                        <figcaption>Original planning sketches for this website</figcaption>
                    </div>
                    <div>
                        <p class="title">Seeing My Work in Action</p>
                        I filled several notebooks <span class="bold">pages worth of plans before</span> I scripted <span class="bold">any code or</span> wrote <span class="bold">any content for this website</span>.
                        I also used a graphic diagramming tool to organize my ideas. For me, the <span class="bold">potential to create my own results</span> is the main appeal of <span class="bold">web design</span> -
                        and <span class="bold">programming</span> in general. Even though <span class="bold">computer science emphasizes theory</span>, it's <span class="bold">inherently applicable</span>. 
                        Apps are applications after all. Theory is simply a versatile form of application. <span class="bold">Seeing my work in action through application is a strong impulse that drives my self-motivation</span>. 
                        But, the work I see has to meet my <span class="bold">self-expectations</span>. My expectations extend to <span class="bold">the process of work too</span>, and STEM stresses that structure and process of arriving at a result -
                        whether it be with proofs, iterations, experiments, or the engineering process.
                    </div>
                </div>
                <div class="content-card">
                    <p class="title">Learning to Apply</p>
                    Although my <span class="bold">passions are my catalyst</span>, my <span class="bold">foundation is in my education</span>. I am motivated to learn by the <span class="bold">prospect of applying my learning</span>.
                    My <span class="bold">Advanced Placement (AP)</span> and honors courses are a basis for my knowledge. I apply this knowledge to the sphere of STEM through our school’s <span class="bold">PLTW Engineering program</span> (Project Lead The Way is a nationally recognized STEM nonprofit).
                    Through courses like AP/PLTW Computer Science A, Aerospace Engineering, Digital Electronics, Cybersecurity, and Principles of Engineering I use my academic foundations while learning new STEM expertise. 
                    This expertise <span class="bold">empowers my projects and extracurricular work.</span>
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