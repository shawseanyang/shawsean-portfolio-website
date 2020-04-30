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
            <div class="page-header" style="background-image:url('/images/nhs-logo-long.jpg')" alt="page header image"> 
                <p class="title">Extracurriculars</p>
                <p class="subtitle">Projects</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="page-table-of-contents">
                    <ul>
                        <li><p class="title">On This Page</p></li>
                        <li><a class="link" href="#leadership">Leadership</a></li>
                        <li><a class="link" href="/stemclub.php">STEM Club</a></li>
                        <li><a class="link" href="#uil">UIL</a></li>
                        <li><a class="link" href="#tshirts">T-Shirt Design</a></li>
                        <li><a class="link" href="#mat">Mu Alpha Theta</a></li>
                        <li><a class="link" href="#nhs">NHS</a></li>
                        <li><a class="link" href="#interact">Interact</a></li>
                    </ul>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="leadership"></a>
                    <p class="title">Clubs, Competitions, Organizations</p>
                    After school, I was involved in <span class="bold">clubs</span>, <span class="bold">competitions</span>, and <span class="bold">organizations</span>.
                    This included activities like  <a class="link" href="stemclub.php">STEM club</a>, <a class="link" href="#uil">UIL</a>, <a class="link" href="#interact">Interact</a>,
                    <a class="link" href="#mat">Mu Alpha Theta</a>, and <a class="link" href="#nhs">NHS</a>!
                    <div class="content-subcard">
                        <p class="title">Leadership</p>
                        My self-expectation for excellence urges me <span class="bold">to take leadership</span> and see that the task at hand is performed efficiently.
                        With this goal follows teamwork, as the success of any activity hinges on the cooperation of the members.
                        The enthusiasm that I see in <span class="bold">STEM club</span> is just one example - everyone is excited to work together towards a <span class="bold">common passion.</span>
                        I've seen the good, the great, the bad, and the ugly in meetings, but I have also learned the value of passion, leadership, inspiration, and clear planning.
                    </div>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="uil"></a>
                    <p class="title">UIL</p>
                    <span class="bold">UIL (University Interscholastic League)</span> is a Texas nonprofit that organizes
                    <span class="bold">academic competitions</span>. 
                    I have ranked top three in Districts and advanced to Regionals for both <span class="bold">computer science</span> and <span class="bold">mathematics</span>.
                    <img src="/images/uil-medals.jpg">
                    <figcaption>Medals from UIL Computer Science & UIL Mathematics</figcaption>
                    <div class="content-subcard">
                        <p class="title">Computer Science</p>
                        In computer science, we complete a Java written test to assess concrete programming knowledge.
                        Then, we reassemble into teams to solve given problems in a timed coding session.
                    </div>
                    <div class="content-subcard">
                        <p class="title">Math</p>
                        Math consists of a challenging written test. My teammates and I have qualified for and competed in regionals competitions for both of these subjects.
                    </div>
                    
                    In both competitions, I collaborate with teammates to achieve a common goal of victory and placement.
                    In addition, I use UIL to boost my <span class="bold">expertise</span> in both fields while enriching my <span class="bold">curriculum</span>.
                    This enhances my familiarity with <span class="bold">demanding</span> coding and math.
                </div>
                <div class="content-card">
                    <a class="bookmark" id="tshirts"></a>
                    <p class="title">T-Shirt Design</p>
                    T-shirts are a staple of any school club, one of the most visible forms of club identity, and a perfect medium for creativity.
                    Applying my interest in <a class="link" href="/interests.php"><span class="bold">graphic design</span></a>,
                    I created our club T-shirts for the <a class="link" href="#nhs"><span class="bold">NHS</span> (National Honor Society)</a>
                    and <a class="link" href="#mat"><span class="bold">Mu Alpha Theta</span> (Math Honor Society)</a> chapters at our school.
                </div>
                <div class="content-card flex-column">
                    <div>
                        <img src="/images/tshirts-front.jpg">
                        <figcaption>I designed the T-shirts for the National Honor Society and Mu Alpha Theta chapters at our school</figcaption>
                    </div>
                    <div>
                        <img src="/images/tshirts-back.jpg">
                        <figcaption>The NHS shirt features a word cloud with a torch beside it. The Mu Alpha Theta shirt is an homage to The Lion King.</figcaption>
                    </div>
                </div>
                <div class="content-card">
                    <div class="content-subcard">
                        <p class="title">In Detail</p>
                        The front of the NHS shirt consists of the letters "<span class="bold">NHS</span>" composed of text with a <span class="bold">torch</span> standing on the side. 
                        The back sports our school's lion logo with a golden wreath.
                        The <span class="bold">Mu Alpha Theta</span> shirt nods to our mascot, the lion, and the movie, <span class="bold italics">The Lion King</span>.
                        By consulting with fellow members and shirt manufacturers to deliver the final products,
                        I learned to <span class="bold">communicate professionally</span> and clearly.
                    </div>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="mat"></a>
                    <p class="title">Mu Alpha Theta</p>
                    I am an officer of our school's <span class="bold">Mu Alpha Theta</span> club, a high school <span class="bold">math honor society</span>. 
                    Through this organization, we tutor other students in need of further guidance in math-related subjects. I designed both our <a class="link" href="#tshirts">Mu Alpha Theta and NHS t-shirts</a>.
                </div>
                <div class="content-card">
                    <a class="bookmark" id="nhs"></a>
                    <p class="title">NHS</p>
                    NHS (<span class="bold">National Honor Society</span>) is a nationwide organization of <span class="bold">high school scholars</span>.
                    During my sophomore year, our school district finished the completion of our new high school,
                    which meant the separation of our graduating class into two separate high schools.
                    <div class="content-subcard">
                        <p class="title">New Beginnings</p>
                        I was fortunate to be assigned to the new high school, which provided the opportunity of <span class="bold">new beginnings</span>.
                        In my Junior year, the other officers and I took on the challenge of establishing our NHS chapter in the new school.
                        This involved jump-starting projects and traditions as opposed to managing existing projects, a unique trial in itself.                        
                        We organized programs like <span class="bold">Teens in the Driver's Seat</span>, promoting safe driving, and our school's <span class="bold">Talent Show</span>, our largest event.
                    </div>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="interact"></a>
                    <p class="title">Interact</p>
                    <span class="bold">Interact</span> is a high school level affiliate of Rotary International that organizes <span class="bold">volunteer work</span>.
                    My participation in our high school's chapter of Interact introduced me to my first taste of volunteering and service.
                    As my <span class="bold">first leadership experience</span>, I also gained an introduction to the responsibilities and activities associated with leading.    
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