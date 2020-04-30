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
            <title>Sean - Template</title>
            
            <style>
                :root {
                    --page-highlight-color: var(--blue-highlight-color); /* highlight color for this page */
                }
                .page-header > .title:after {
                    background-color: none;
                    
                    background: linear-gradient(to right, var(--blue-highlight-color), var(--dark-blue-highlight-color));
                }
            </style>
        </head>
        <body>
            <div class="page-header" style="background-image:url('/images/snow mountain.jpg')" alt="page header image"> 
                <p class="title">Title Placeholder</p>
                <p class="subtitle">Subtitle</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">Content Card Title</p>
                    <a class="link" href="/template.php">Lorem ipsum</a> dolor sit amet, <span class="bold highlight">consectetur</span> adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, <span class="italics">quis nostrud</span> exercitation ullamco laboris nisi 
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="block-image-link-group clearfix">
                    <a class="block-image-link" style="background-image:url('/images/snow mountain.jpg')" alt="page header image" href="#rv-12-section">
                        RV-12 Light Sport Aircraft Build
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/snow mountain.jpg');" alt="page header image" href="#rc-section">
                        Remote-Controlled Model Planes
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/snow mountain.jpg');" href="#programming-section">
                        Programming
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/snow mountain.jpg')" alt="page header image" href="#webdev">
                        Web Development
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/snow mountain.jpg')" alt="page header image" href="#extracurriculars-section">
                        Extracurriculars
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/snow mountain.jpg')" alt="page header image" href="#stemclub">
                        STEM Club
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                </div>
                <div class="content-card">
                    <p class="title">Content Card Title</p>
                    <a class="link" href="/template.php">Lorem ipsum</a> dolor sit amet, <span class="bold highlight">consectetur</span> adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, <span class="italics">quis nostrud</span> exercitation ullamco laboris nisi 
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <a class="filled-rounded-button" href="/about.php">Button Here</a>
                    
                    <div class="content-subcard">
                        <p class="title">Content Subcard Title</p>
                        <a class="link" href="/template.php">Lorem ipsum</a> dolor sit amet, <span class="bold highlight">consectetur</span> adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, <span class="italics">quis nostrud</span> exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, 
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <a class="filled-rounded-button" href="/about.php">Button Here</a>
                    </div>
                </div>
                <div class="content-card">
                    <p class="title">Content Card Title</p>
                    <a class="link" href="/template.php">Lorem ipsum</a> dolor sit amet, <span class="bold highlight">consectetur</span> adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, <span class="italics">quis nostrud</span> exercitation ullamco laboris nisi 
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <a class="filled-rounded-button" href="/about.php">Button Here</a>
                </div>
                <div class="content-card fullspan-card">
                    <p class="title">Content Card Title</p>
                    <a class="link" href="/template.php">Lorem ipsum</a> dolor sit amet, <span class="bold highlight">consectetur</span> adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, <span class="italics">quis nostrud</span> exercitation ullamco laboris nisi 
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <div class="content-subcard">
                        <p class="title">Content Subcard Title</p>
                        <a class="link" href="/template.php">Lorem ipsum</a> dolor sit amet, <span class="bold highlight">consectetur</span> adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, <span class="italics">quis nostrud</span> exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, 
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
                <div class="content-card">
                    <p class="title">Content Card Title</p>
                    <a class="link" href="/template.php">Lorem ipsum</a> dolor sit amet, <span class="bold highlight">consectetur</span> adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, <span class="italics">quis nostrud</span> exercitation ullamco laboris nisi 
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <img src="/images/mountain clouds.jpg" alt="mountain clouds">
                    <figcaption class="caption">This caption is about the photo. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</figcaption>
                    <div class="content-subcard">
                        <p class="title">Content Subcard Title</p>
                        <a class="link" href="/template.php">Lorem ipsum</a> dolor sit amet, <span class="bold highlight">consectetur</span> adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, <span class="italics">quis nostrud</span> exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, 
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="content-subcard">
                        <p class="title">Content Subcard Title</p>
                        <a class="link" href="/template.php">Lorem ipsum</a> dolor sit amet, <span class="bold highlight">consectetur</span> adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, <span class="italics">quis nostrud</span> exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        <img src="/images/mountain clouds.jpg" alt="mountain clouds">
                        Excepteur sint occaecat cupidatat non proident, 
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
                <div class="content-card">
                    <p class="title">Content Card Title</p>
                    <a class="link" href="/template.php">Lorem ipsum</a> dolor sit amet, <span class="bold highlight">consectetur</span> adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, <span class="italics">quis nostrud</span> exercitation ullamco laboris nisi 
                    ut aliquip ex ea commodo consequat. <a class="link" href="/template.php">Lorem ipsum</a> Duis aute irure dolor in reprehenderit 
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="image-grid">
                        <p style="text-align:center; color:var(--slightly-light-gray-color);">Hover or tap to see captions</p>
                        <div class="row">
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Japan Airlines 787<p class="desc">A realistic recreation of the Boeing 787 Dreamliner</p></div><img src="/images/mc-jal.gif"></div>
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Boeing 777<p class="desc">A scale Boeing 777 - one of the most popular long-haul airliners</p></div><img src="/images/mc-qantas-color.gif"></div>
                        </div>
                        <div class="row">
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">787 Side Shot</p><p class="desc">A side shot of the front fuselage and engine of the 787 Dreamliner</p></div><img src="/images/mc-cubed-787.gif"></div>
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Sunken Station Plaza<p class="desc">The minimalist sunken outdoor plaza from one of my train stations</p></div><img src="/images/mc-station.gif"></div>
                        </div>
                        <div class="row">
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">A320neo Winglet<p class="desc">The trailing edge and "sharklet" winglet of the A320neo</p></div><img src="/images/mc-wing1.gif"></div>
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">777 Wing Flex<p class="desc">The engine, trailing edge, flap track fairings, and wing tip of the 777</p></div><img src="/images/mc-wing2.gif"></div>
                        </div>
                        <div class="row">
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Boeing 757<p class="desc">A classic narrow-body airliner with a distinctive nose and shape</p></div><img src="/images/mc-757.gif"></div>
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Jetways<p class="desc">A realistic dual jetway gate from one of my airport projects</p></div><img src="/images/mc-jetways.gif"></div>
                        </div>
                        <div class="row">
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">White Metro Platforms<p class="desc">Underground metro station platforms with orange highlights and high center ceiling. </p></div><img src="/images/mc-andea-central-platforms.gif"></div>
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Marina Transit Hub<p class="desc">With a renovated industrial style, this hub joins subway, light rail, cruise terminal, and buses</p></div><img src="/images/mc-marina-above.gif"></div>
                        </div>
                        <div class="row">
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Marina Transit Hub Platforms<p class="desc">Sunken platforms of the marina transit hub join brick, concrete, and exposed beams</p></div><img src="/images/mc-marina-platforms-close.gif"></div>
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Underground Station Platforms<p class="desc">Warm underground train platforms lined with a ceiling of curved wood panels and an arched skylight above</p></div><img src="/images/mc-platforms.gif"></div>
                        </div>
                        <div class="row">
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">San Diego International<p class="desc">Terminal Two of my work-in-progress scale recreation of San Diego International Airport</p></div><img src="/images/mc-sandiego.gif"></div>
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Inside San Diego Intl<p class="desc">Inside the rotunda of my recreation of San Diego International Airport</p></div><img src="/images/mc-sandiego-inside.gif"></div>
                        </div>
                        <div class="row">
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Stone Metro Station<p class="desc">Underground metro station platforms with illuminated panels against natural stone walls.</p></div><img src="/images/mc-t8-station.gif"></div>
                            <div class="cell" onClick="return false; //allows mobile users to see the caption overlay"><div class="title">Contemporary Lake House<p class="desc">An open-layout home on short stilts with floor-to-ceiling windows facing the waterfront</p></div><img src="/images/mc-house.gif"></div>
                        </div>
                    </div>
                <div class="block-image-link-group clearfix">
                    <a class="block-image-link" style="background-image:url('/images/snow mountain.jpg')" alt="page header image" href="/projects.php">
                        Projects
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/mountain clouds.jpg')" alt="page header image" href="/interests.php">
                        Interests
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/snow mountain.jpg')" alt="page header image" href="/resume.php">
                        Resume
                    </a>
                </div>
            </div>
            <?php include "footer.php" ?>
        </body>
    </html>