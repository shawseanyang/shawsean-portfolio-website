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
            <div class="page-header" style="background-image:url('/images/css-code.jpg')" alt="page header image"> 
                <p class="title">Programming</p>
                <p class="subtitle">Projects</p>
            </div>
            <?php include "parallax-header.php" ?>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="page-table-of-contents">
                    <ul>
                        <li><p class="title">On This Page</p></li>
                        <li><a class="link" href="#whycomputerscience">Why Computer Science</a></li>
                        <li><a class="link" href="#learninglanguages">Learning Languages</a></li>
                        <li><a class="link" href="#major&career">Major & Career</a></li>
                        <li><a class="link" href="#webdev">&lt;web-dev&gt;</a></li>
                        <li><a class="link" href="#java">Java</a></li>
                        <li><a class="link" href="#python">Python</a></li>
                        <li><a class="link" href="#robotics">Robotics C++</a></li>
                    </ul>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="whycomputerscience"></a>
                    <p class="title">public static void <span class="bold">main</span>(String[] args);</p>
                    The juicy stuff! I have been continuously involved with <span class="bold">computer science and programming</span> throughout high school.
                    The ability to <span class="bold">apply concrete science to creative solutions</span> is one of the main appeals of computer science for me. 
                </div>
                <div class="quote-card">
                    <p class="title">"Anyone can write code that a <span class="bold">computer</span> can understand. <span class="bold">Good programmers</span> write code that <span class="bold">humans can understand</span>."</p>
                    - Martin Fowler
                </div>
                <div class="content-card">
                    Like art, anyone can create doodles, but <span class="bold"> artists create masterpieces</span>. 
                    Like engineering, anyone can piece together a 'bridge', but <span class="bold"> engineers build bridges that do not collapse</span>.
                    Programming inherits this principle. It takes a foundation to write code, but <span class="bold">writing human-friendly is an art and the result of good design</span>.
                    This also applies to the front-end side of computer applications.
                    This is exactly what <span class="bold">makes me passionate about computer science</span> and programming.
                    It requires a solid <span class="bold">understanding of theory but encourages creativity</span> and innovation. It is not purely empirical like natural science, and not purely rigid like engineering.
                    Rather, it is fluid in its ever-changing applications.
                </div>
                <div class="content-card">
                    <a class="bookmark" id="learninglanguages"></a>
                    <p class="title">Learning Languages</p>
                    <div class="content-subcard">
                        <p class="title">Python, Java, Web Dev, C++</p>
                        Reflecting my career aspirations, I <a class="link" href="#python">taught myself <span class="bold">Python</span></a> before Freshmen year. 
                        Next, I worked with <a class="link" href="#java"><span class="bold">Java</span> in AP Computer Science</a> and applied this to android app development during Junior year.
                        I still frequently use Java to create scripts that automate everyday processes like batch file renaming or editing.
                        I've also since stepped into <a class="link" href="#webdev">the world of <span class="bold">web development</span></a>, hence this website.
                        Finally, during Senior year, I wrote in <a class="link" href="#robotics"><span class="bold">C++</span> to program our robots</a> for the VEX VRC robotics competition.
                    </div>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="major&career"></a>
                    <p class="title">Major in Computer Science & Career in Software Development</p>
                    With these interconnected <span class="bold">activities</span>, I aim to develop a <span class="bold">foundation</span> to prepare for a major in computer science and a career in software development.
                    As one of my <span class="bold">main</span> interests, I am constantly expanding my exposure to programming. It is exhilarating to see our VEX VRC <span class="bold">robots
                    come to life</span> using the direction of clean code. I write <span class="bold">code for hours</span> a day in class with a smile. 
                    In my free time, I often read <span class="bold">articles</span> or listen to <span class="bold">TED talks</span> online about computer science concepts, user-interface design, or computer modelling.
                    <div class="content-subcard">
                        <p class="title">Most importantly though, <span class="bold">I enjoy applying this interest to projects</span> -</p>
                        including in this <a class="link" href="#webdev"><span class="bold">personal portfolio website</span></a>, programming robot movment in my <a class="link" href="#robotics"><span class="bold">robotics competitions</span></a>,
                        crafting image processing scripts in my <a class="link" href="/nasasees.php"><span class="bold">NASA SEES Internship</span></a>, or writing programs for everyday automation.
                    </div>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="webdev"></a>
                    <p class="title">&lt;web-dev&gt;</p> <!-- <html> with escape characters -->
                    <div class="content-subcard">
                        <p class="title">This Portfolio Website</p>
                        As the product of my current web development skills, <span class="bold">this website is a testimony to my love for graphic design and programming</span>! 
                    </div>
                </div>
                <div class="quote-card"><p class="title">"Why talk when <span class="bold">I can show</span>?"</p></div>
                <div class="content-card">
                    <div class="content-subcard">
                        With this site, I can <span class="bold">show</span> the web development aspect of <span class="bold">my programming</span>
                        (which is arguably more interesting than just talking about my programming) <span class="bold">while simultaneously introducing my projects</span> and minimalist aesthetic. 
                    </div>
                </div>
                <div class="content-card flex-column">
                    <div>
                        <img src="/images/website-sketches.jpg">
                        <figcaption>Original planning sketches for this website.</figcaption>
                    </div>
                    <div>
                        <p class="title">The Building Process</p>
                        Like my <a class="link" href="/rcplanes.php">remote-controlled planes</a>, this website was completed solo. By <span class="bold">crafting this website from scratch</span>,
                        I gained extensive programming experience while honing my design, project management, and execution skills.
                        I spent a month rounding out my knowledge of HTML, CSS, and Javascript, three weeks planning and designing, and several more months writing, building, and refining. 
                        For quality's sake and my own learning's sake, I restrained from employing assistive libraries like Bootstrap - <span class="bold">all my code is handmade</span>. No Wix, no Squarespace, <span class="bold">only original code</span>.
                        This motivated me to <span class="bold">truly incorporate and master these languages and apply them to a real product.</span>
                    </div>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="java"></a>
                    <p class="title">Java</p> <p class="italics lighten">(not the beverage)</p>
                    My competence in <span class="bold">Java</span> mainly originates from my <span class="bold">AP Computer Science</span> course.
                    But, I apply it heavily in my side projects for its presence in the many applications, including <span class="bold">scripts for automation</span> like batch file editing
                    and Android app development.
                    After all, Java is one of the Lingua Francas of the coding world.
                    In addition to projects, my participation in <a class="link" href="extracurriculars.php#uil"><span class="bold">UIL Computer Science</span></a> (a Texas state-wide academic competition) enables me to refine a more detailed understanding of Java.
                    Holistically, out of the several programming languages I have studied, Java is my <span class="bold">greatest proficiency</span>. 
                </div>
                <div class="content-card">
                    <a class="bookmark" id="python"></a>
                    <p class="title">Python</p> <p class="italics lighten">(not the reptile)</p>
                    As my first programming language, I <span class="bold">taught myself</span> the basics of coding through Python.
                    The language served as a stepping stone by introducing me
                    to <span class="bold">core programming concepts</span> like object manipulation and flow structures. 
                    During my <a class="link" href="/nasasees.php"><span class="bold">NASA SEES Internship</span></a>, I also wrote <span class="bold">scripts in Python</span> to output measurement <span class="bold">indices using satellite imagery</span>. 
                    We used those indices to <span class="bold">analyze vegetation recovery</span> after the <span class="bold">Bastrop County Complex Fire of 2011</span>.
                    <img src="/images/burn-severity-heat-map.jpg">
                    <figcaption>Burn severity heat map produced with my Python scripts during my <a class="link" href="/nasasees.php">NASA SEES Internship</a></figcaption>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="robotics"></a>
                    <p class="title">Robotics <span class="lighten">C++</span></p>
                    I am the <span class="bold">lead programmer for our VEX Robotics Competition team</span>, where we build and program robots to compete in the international competition.
                    The robots are programmed in <span class="bold">C++</span> using a custom libary for VEX. It is a joy to see our <span class="bold">hardware infused with a spark of being, dancing to the direction of neat code</span>!
                    Having competed at the State level last year, I am aspiring for Worlds this year!
                    <img src="/images/robot-stack.jpg">
                    <figcaption>One of our regionals semi-finalist robots for the 2019-20 Tower Takeover competition</figcaption>
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