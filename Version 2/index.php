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
            <meta name="keywords" content="Sean, Personal, Portfolio">
            <title>Sean</title>
            
            <style>
                :root {
                    --page-highlight-color: var(--home-highlight-color); /* highlight color for this page */
                    --page-second-highlight-color: var(--home-second-highlight-color)
                }
            </style>
        </head>
        <script>
            /*
            * JAVA SCRIPT for cycling words on the page header subtitle
            */
            function subtitleCycler() { //called by <body> on page load
                var cycle = 1; //records which subtitle the cycle is on. Effectively the index for the subtitles array
                var subtitles = 
                    ["Student", 
                    "Leader", 
                    "Thinker", 
                    "Programmer",
                    "Engineer", 
                    "Aviation Enthusiast", 
                    "Designer", 
                    "Traveler"]; //subtitles array that stores the subtitles to cycle through
                var subtitleElement = document.getElementById("page-subtitle"); //subtitleElement is the page-subtitle element
                subtitleElement.innerHTML = subtitles[0]; //start on the first subtitle
                var subtitleInterval;
                var cycling = true; //keeps track of whether the subtitles are cycling or not
                
                window.onscroll = function() {IndexPageScrollFunction(); NavBarScrollFunction(); ParallaxFunction();}; //when the window scrolls, call the two scroll functions
                
                startSubtitleCycle(); //start the cycling on page load
                
                function IndexPageScrollFunction() { 
                    //if between 0 and 100vh, run subtitleCycler, otherwise stop the cycling to save memory
                    var vh = document.documentElement.clientHeight;
                    if (document.body.scrollTop == 0*vh || document.documentElement.scrollTop == 0*vh) {
                        if (document.body.scrollTop < 1*vh || document.documentElement.scrollTop < 1*vh) {
                            if (cycling) { //if the cycle is ongoing, do nothing
                                //do nothing
                            } else { //if the cycle is not ongoing, start it
                                startSubtitleCycle();
                                cycling = true;
                            }
                        } else { //if scroll is past page header, stop cycling
                            clearInterval(subtitleInterval);
                            cycling = false;
                        }
                    }
                }
                function startSubtitleCycle() {
                    subtitleInterval = setInterval(function(){ //set an interval to run this cycle changer function every 2.5 seconds
                        //text in subtitle is subtitle in the array which the function is currently on
                        
                        setTimeout(function() { //wait 0.5 seconds after startSubtitleCycle call
                            subtitleElement.style.opacity = 0; //transition to 0 opacity
                        }, 500);
                        
                        setTimeout(function() { //wait 1 second after startSubtitleCycle call
                            subtitleElement.innerHTML = subtitles[cycle]; //replace text with next subtitle
                            subtitleElement.style.opacity = 0; //transition to 0 opacity
                        }, 1000);
                        setTimeout(function(){ //wait 1.5 seconds after startSubtitleCycle call
                            subtitleElement.style.opacity = 1; //transition opacity back to 1
                        }, 1500)
                        
                        if (cycle == subtitles.length-1) { //if the cycle index is at the end of the list
                            //restart at 0
                            cycle = 0;
                        } else { //else, if in the list
                            cycle++; //go to the next index
                        }
                        
                    }, 2250);
                }
            }
        </script>
        <body onload="subtitleCycler();">
            <div class="page-header" style="background-image:url('/images/snow mountain.jpg');" alt="page header image"> 
                <p class="title">Hi, I'm Sean!</p>
                <p class="subtitle" id="page-subtitle">Student</p>
                <a class="page-header-down-button" href="#content-start"><i class="fas fa-chevron-down"></i></a>
            </div>
            <?php include "parallax-header.php" ?>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <a class="bookmark" id="content-start"></a>
                <div class="page-table-of-contents">
                    <ul>
                        <li><p class="title">On This Page</p></li>
                        <li><a class="link" href="#intro">Intro</a></li>
                        <li><a class="link" href="#highschoolhighlights">High School Highlights</a></li>
                        <li><a class="link" href="#thiswebsite">This Website</a></li>
                        <li><a class="link" href="#selectedprojects">Selected Projects</a></li>
                        <li><a class="link" href="#more">More</a></li>
                    </ul>
                </div>
                <div class="quote-card" style="background-color:white; margin-bottom:0;">
                    <a class="bookmark" id="intro"></a>
                    <p class="title">I'm a high school student with 
                    <br>
                    <span class="bold">a love for STEM!</span></p>
                </div>
                <div class="content-card" style="margin-top:0;">
                    Not just <span class="bold">Science</span>, <span class="bold">Tech</span>, 
                    <span class="bold">Engineering</span>, and <span class="bold">Math</span> - but also 
                    <span class="bold">Searching</span>, <span class="bold">Tinkering</span>, <span class="bold">Efficient</span>, and <span class="bold">Meticulous</span>! 
                    As a passionate student, I enjoy applying what I learn from my classes in my activities. With that, I'm currently headed towards a 
                    <span class="bold">computer-science major</span>, motivated by a drive to create and a fascination with technology.
                    <a class="filled-rounded-button" href="/story.php">More About My Story</a>
                </div>
                <div class="content-card fullspan-card">
                    <a class="bookmark" id="highschoolhighlights"></a>
                    <p class="title">While in high school I was ...</p>
                    <ul>
                        <li>A <a class="link" href="/nasasees.php"><span class="bold">NASA SEES Intern</span></a>, contributing to <span class="bold">environmental research</span> using satellite imagery and Python scripting, investigating wildfire recovery</li>
                        <li>The <span class="bold">founder and president</span> of our school district’s first <a class="link" href="/stemclub.php"><span class="bold">STEM Club</span></a></li>
                        <li>A team member involved in the beginning-to-end construction of a modern FAA certified <a class="link" href="rv12.php"><span class="bold">light sport aircraft</span></a></li>
                        <li>An avid <a class="link" href="/programming.php"><span class="bold">programmer</span></a>, familiar with <span class="bold">Java</span>, <span class="bold">Python</span>, <span class="bold">HTML</span>, <span class="bold">CSS</span>, and <span class="bold">Javascript</span></li>
                        <li>A team member of our Vex VRC <a class="link" href="/programming.php#robotics"><span class="bold">Robotics</span></a> team</li>
                    </ul>
                    <a class="filled-rounded-button" href="/projects.php">More About My Projects</a>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="thiswebsite"></a>
                    <p class="title">This Website, Built From the Ground Up</p>
                    <span class="bold">This</span> personal portfolio <span class="bold">website</span>
                    was <span class="bold">written from scratch</span> to <span class="bold">demonstrate my programming</span>
                    skills and <span class="bold">introduce</span> my various <span class="bold">projects</span>. By crafting this website,
                    I refined my capacity with web development, graphic design, and project planning.
                    This project was developed without the aid of any assisting programs such as graphical
                    website creators or code-generating APIs because I wanted to master the process for myself.
                    <a class="filled-rounded-button" href="/programming.php#webdev">More About This Website</a>
                </div>
                <div class="content-card fullspan-card" style="margin-bottom:0;">
                    <a class="bookmark" id="selectedprojects"></a>
                    <p class="title">Selected Projects</p>
                    I'm involved in many projects, mainly relating to technology, aviation, and STEM. in my off-time, I enjoy tinkering with my creative interests like art, design, and my remote-controlled planes. Read more about some of my projects below:
                </div>
                <div class="block-image-link-group clearfix" style="margin-top:0;">
                    <a class="block-image-link" style="background-image:url('/images/bastrop-field.jpg')" alt="page header image" href="/nasasees.php">
                        NASA SEES Internship
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/stem-club-group.jpg')" alt="page header image" href="/stemclub.php">
                        Founding STEM Club
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                    <a class="block-image-link" style="background-image:url('/images/css-code.jpg')" alt="page header image" href="/programming.php">
                        Programming
                        <div class="block-image-link-overlay" style="background-color:rgba(0,0,0,0.25)"></div>
                    </a>
                </div>
                <div class="content-card" style="margin-bottom:0; text-align:center;">
                    <a class="bookmark" id="more"></a>
                    <p class="title" style="text-align:center;">More</p>
                    Learn more about me, my projects, or what I enjoy in my off-time.
                </div>
                <?php include "menu-links.php" ?>
            </div>
            <?php include "footer.php" ?>
        </body>
    </html>