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
            <div class="page-header" style="background-image:url('/images/css-code.jpg')" alt="page header image"> 
                <p class="title">Computers</p>
                <p class="subtitle">Interests</p>
            </div>
            <?php include "parallax-header.php" ?>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">A Theme Among My Projects</p>
                    Like aviation, the use of <span class="bold">computers</span> is another theme among my projects.
                    Since computer science is one of my main focuses, and programming is a principle method of applying it,
                    it makes sense that I am interested in multiple facets of computing.
                    Its <span class="bold">the reason this website exists</span>!
                </div>
                <div class="content-card">
                    <p class="title">Software & Coding</p>
                    Although I am more versed in <span class="bold">software and coding</span>, I have a reasonable understanding of <span class="bold">hardware</span> as well.
                    As most of my programming and learning occurs outside of the classroom, on my own, it is <span class="bold">both a “project” and an “interest”</span>.
                </div>
                <div class="content-card">
                    <p class="title">Programming Projects</p>
                    I have programming projects in:
                    <ul>
                        <li><a class="link" href="/programming.php#java"><span class="bold">Java</span></a> - where I am most competent - Scripts, Android Apps, UIL Computer Science</li>
                        <li><a class="link" href="/programming.php#python"><span class="bold">Python</span></a> - <a class="link" href="nasasees.php">NASA SEES Image Processing</a> & Indices Extraction, Scripts (rename, edit & move files)</li>
                        <li><a class="link" href="/programming.php#webdev"><span class="bold">Web Dev</span></a> - This website, school projects, our Robotics Website</li>
                        <li><a class="link" href="/programming.php#robotics"><span class="bold">C++</span></a> - VEX Robotics Programming</li>
                    </ul>
                    <a class="filled-rounded-button" href="/programming.php">More about my programming</a>
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