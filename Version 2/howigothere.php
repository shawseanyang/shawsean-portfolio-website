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
            <div class="page-header" style="background-image:url('/images/howdy-wing.jpg')" alt="page header image"> 
                <p class="title">How I Got Here</p>
                <p class="subtitle">My Story</p>
            </div>
            <?php include "parallax-header.php" ?>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="page-table-of-contents">
                    <ul>
                        <li><p class="title">On This Page</p></li>
                        <li><a class="link" href="#childhood">Childhood</a></li>
                        <li><a class="link" href="#seat45k">Seat 45K</a></li>
                        <li><a class="link" href="#buildingblocks">Building Blocks</a></li>
                        <li><a class="link" href="#doodles">Doodles</a></li>
                        <li><a class="link" href="#asianamerican">Asian American</a></li>
                    </ul>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="childhood"></a>
                    <p class="title">My Childhood Influenced My Interests</p>
                    <ul>
                        <li>My family and I <span class="bold">flew frequently</span> when I was little, introducing me to <span class="bold">aviation</span>.</li>
                        <li>My favorite toys were my <span class="bold">Legos</span>, which sparked my curiosity in <span class="bold">tinkering</span>.</li>
                        <li>I loved to <span class="bold">draw and draw</span>, and this exposed me to the <span class="bold">thrill of creativity</span>.</li>
                        <li>Owing to my family's origins in Asia, I am <span class="bold">bilingual</span>.</li>
                    </ul>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="seat45k"></a>
                    <p class="title">Seat 45K</p>
                    Seat 45K is arguably my <span class="bold">favorite seat</span> on an EVA-Air <span class="bold">Boeing 777</span>.
                    It's a <span class="bold">window seat over the wing</span>.
                    Most would argue that the <span class="bold">wing blocks half of the view</span>, <span class="bold">but for me, the wing is the view</span>.
                    In fact, seeing this view on my early flights piqued my <span class="bold">interest in flying</span> and I was immediately attached! 
                    <img src="/images/787-wing.jpg">
                    <figcaption>Example of a window view</figcaption>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="buildingblocks"></a>
                    <p class="title">The Building Blocks</p>
                    When I was not flying as a kid, <span class="bold">I was building</span>.
                    I had boxes upon boxes of <span class="bold">Lego Bricks</span> and I spent a good portion of my free time 
                    (and that's a lot of free time) constructing multicolored planes (for a lack of colors I needed).
                    Even though I loved to build, what I loved more was to destroy - but <span class="bold">to destroy in a controlled manner</span>.
                    I would purposefully <span class="bold">crash-test</span> my builds and examine the wreckage.
                    The <span class="bold">cause-and-effect</span> relationship sparked my curiosity.
                    This involvement with Legos became the building blocks of my <span class="bold">tinkering and spirit of inquiry</span> in analyzing problems.
                </div>
                <div class="content-card">
                    <a class="bookmark" id="doodles"></a>
                    <p class="title">Oodles of Doodles</p>
                    There was a wall in our previous house that was plastered with assorted printer paper ... <span class="bold">I was an avid drawer</span>.
                    I enjoyed <span class="bold">imagining scenarios</span> and situations for my doodles that I would sketch.
                    Yet, a picture of that wall proves that many of those drawings felt crowded by pencil marks.
                    This was because my sketches were <span class="bold">dynamic</span>.
                    They weren't representations of a single snapshot in time,
                    rather I used them as <span class="bold">a canvas to record a series of events or a system</span>.
                    I didn't really erase though, so <span class="bold">the events just piled onto the paper</span>. 
                </div>
                <div class="content-card">
                    <a class="bookmark" id="doodles"></a>
                    <p class="title">Oppurtunity to Create</p>
                    Truth is, I was less concerned with depicting reality, and more with <span class="bold">the opportunity to create</span>.
                    Branching out from this, my favorite subjects still involve <span class="bold">applied projects and creative liberty</span>,
                    like <span class="bold">computer science and engineering</span>. As anyone who codes knows,
                    nothing is set in stone until 'compile' is pressed.
                    Every solution to every problem is unique and reflective of the thinking process.
                    <span class="bold">Even a simple operation like "Hello World" may be accomplished in numerous ways</span>.
                    With these new mediums, I strive for results that are uniquely mine.
                    It's one of the factors that motivates me, the prospect that my <span class="bold">work is the fruit of creative labor</span>.
                </div>
                <div class="content-card">
                    <a class="bookmark" id="asianamerican"></a>
                    <p class="title">Asian American</p>
                    <span class="bold">I often speak in 'Chinglish' with my siblings.</span>
                    'Chinglish' is the mix of <span class="bold">Chinese and English</span> words in a conversation.
                    Owing to my family's origins from Asia, I grew up in a <span class="bold">bilingual and bicultural home</span> where combinations like 'Chinglish' could emerge.
                    This syncretism of Asian and American traditions has provided me wider insights into different cultures,
                    both cultural attitudes, nostalgic memories, and the ability to communicate in two languages.
                    I am currently <span class="bold">fluent in both</span> English and Mandarin Chinese, which are two major tongues of the modern world.
                </div>
                <div class="content-card fullspan-card" style="margin-bottom:0">
                    From a love of <span class="bold">flight</span>, I gained a love of <span class="bold">engineering</span>.
                    From <span class="bold">playing with Legos</span>, I <span class="bold">played with critical thinking</span>.
                    From my <span class="bold">doodles</span>, I <span class="bold">drew a desire to create</span>. Between kindergarten and freshmen year,
                    I have combined these interests into my current source of motivation.
                    <span class="bold">A motivation for STEM, for problem-solving, and for creativity.</span>
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