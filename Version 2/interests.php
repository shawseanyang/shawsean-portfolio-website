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
            <div class="page-header" style="background-image:url('/images/mc-wing.png')" alt="page header image"> 
                <p class="title">Interests</p>
                <p class="subtitle">Hobbies & Passions</p>
            </div>
            <?php include "parallax-header.php" ?>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="content-card">
                    <p class="title">Creative Hobbies & Interests</p>
                    Like my projects, my interests also involve <span class="bold">creativity</span>! 
                    This includes my <span class="bold">hobbies</span> (like drawing or Minecraft realism) and my <span class="bold">passions</span> (like traveling and computers).
                    In my more inventive hobbies, this creativity emerges through rigorous standards of quality and a love for making and tinkering.
                </div>
                <div class="content-card">
                    <p class="title">A Combination of Art and Technology</p>
                    Since it is quite a broad term, my interest in <span class="bold">“design”</span> is also a broad term that encompasses several subcategories.
                    As a kid, I loved <a class="link" href="/howigothere.php#doodles">sketching my ideas</a> and creations or 
                    <a class="link" href="/howigothere.php#buildingblocks">bringing them to life in Legos</a>.
                    Now, I take that creativity and sprinkle in <span class="bold">art and technology</span>!
                    For instance, during the creation of <span class="bold">this website</span>,
                    I carefully selected <span class="bold">color schemes, shapes, and layouts to complement the content and coding</span>.
                </div>
                <!--<div class="content-card fullspan-card" style="margin-bottom:0; margin-top:0; padding-bottom:0; text-align:center;">
                    <p class="title">Projects</p>
                </div>-->
                <div class="block-image-link-group clearfix">
                    <a class="block-image-link" style="background-image:url('/images/wengen.jpg')" alt="page header image" href="/traveling.php">
                        Traveling
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/young-eagles-flight.jpg')" alt="page header image" href="/aviation.php">
                        Aviation
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/css-code.jpg')" alt="page header image" href="/computers.php">
                        Computers
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/female-face.jpg')" alt="page header image" href="/drawing.php">
                        Drawing
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/isometric-rectangles-long.jpg')" alt="page header image" href="/uidesign.php">
                        UI Design
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/mc-station.jpg')" alt="page header image" href="/minecraft.php">
                        Minecraft Realism
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