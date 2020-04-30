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
            <div class="page-header" style="background-image:url('/images/isometric-rectangles-long.jpg')" alt="page header image"> 
                <p class="title">UI Design</p>
                <p class="subtitle">Interests</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                     <p class="title">Subtle & Appealing</p>
                    My interest in <span class="bold">user-interface design</span> stems primarily from my love of 
                    <span class="bold">art</span>, <span class="bold">subliminal design</span>, and <span class="bold">technology</span>.
                    Like the subtle design considerations in many airports - from signage, to layout, to colors -
                    user-interface design conveys the <span class="bold">content to the user in an appealing manner</span>.
                    The frustration of sifting through a badly organized website or the <span class="bold">comfort</span> of exploring a friendly and usable interface contrasts the importance of this.
                </div>
                <div class="content-card">
                     <p class="title">Communication</p>        
                    By learning about UI design, I apply the fundamentals of <span class="bold">art</span> that I gained from drawing to the <span class="bold">front-end technology</span>.
                    The end purpose of technology is to aid people,
                    so the <span class="bold">communication</span> between the user and the tool is as important as the <span class="bold">function</span> of the tool.
                </div>
                <div class="content-card fullspan-card">
                    <p class="title">This Website: <span class="lighten">A Showcase</span></p>
                    With the clean, yet expressive <span class="bold">design of this website</span>, I aim to <span class="bold">showcase my</span> interest in 
                    <span class="bold">UI design</span> through physical demonstration.
                </div>
                <div class="content-card">
                    <div class="content-subcard">
                        <p class="title">Minimalist</p>
                        Since the purpose of a website is to accentuate the content and present it in a persuading form,
                        I opted with a <span class="bold">clean, flat, minimalist appearance</span> that emphasizes my content: white backgrounds, large images, no shadows, and prominent accent colors.
                    </div>
                    <div class="content-subcard">
                        <p class="title">Page Colors</p>
                        The <span class="bold"><span style="color:var(--blue-highlight-color)">different</span> <span style="color:var(--dark-blue-highlight-color)">highlight</span> <span style="color:var(--purple-highlight-color)">colors</span> of each page</span> on this website serve to orientate the user while the clean layout focuses on the content.
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