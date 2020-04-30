<nav class="navbar">
    <a class="navbar-logo" href="/index.php">
        <span class="navbar-logo">
            S <span style="color:var(--slightly-light-gray-color);">.</span>
        </span>
        <!--<img class="navbar-logo" src="/images/placeholder.gif" alt="navbar logo image"></img>-->
    </a>
    <div class="navlink-group">
        <a class="navlink" href="/index.php">Home</a>
        <a class="navlink" href="/story.php">My Story</a>
        <a class="navlink" href="/projects.php">Projects</a>
        <a class="navlink" href="/interests.php">Interests</a>
        <!-- <a class="navlink" href="/resume.php">Resume</a> -->
    </div>
</nav>
<a id="top-button" onclick="scrollToTop()"><i class="fas fa-chevron-up"></i></a>
<a id="menu-icon" onclick="toggleOverlay()" ><i class="fas fa-bars"></i></a>
<div id="navoverlay">
    <div class="column clearfix navlink-group">
        <a class="navbar-logo" href="/index.php">
            <span class="navbar-logo">
            S <span style="color:var(--slightly-light-gray-color);">.</span>
            </span>
            <!--<img id="navoverlay-logo" src="/images/placeholder.gif" alt="navoverlay logo image"></img>-->
        </a>
        <a class="navlink" href="/index.php">Home &rarr;</a>
        <a class="navlink" href="/story.php">My Story &rarr;</a>
        <a class="navlink" href="/projects.php">Projects &rarr;</a>
        <a class="navlink" href="/interests.php">Interests &rarr;</a>
        <!-- <a class="navlink" href="/resume.php">Resume</a> -->
    </div>
</div>

<script> /* javascript specifically for the navbar */

    /* before page loads, highlight current page */
    
    
    /*function highlightCurrentPage() {
        var navlinks = document.getElementsByClassName("navlink");
        for (var i = 0; i < navlinks.length; i++) {
            
            var navlink = navlinks[i];
            
            var pagefullhref = window.location.href;
            var pagehref = pagefullhref.substr(pagefullhref.lastIndexOf('/'));
            
            if (navlink.getAttribute("href").equals(pagehref)) {
                navlink.classList.add("current-page");
            }
        }
    }*/

    /* when window scrolls */
    /*window.onscroll = function() {NavBarScrollFunction(); highlightCurrentPage()};*/

    function NavBarScrollFunction() { 
        //if more than 150vh down the page, show Back to Top button
        var vh = document.documentElement.clientHeight;
        if (document.body.scrollTop > 1.2*vh || document.documentElement.scrollTop > 1.2*vh) {
            document.getElementById("top-button").style.opacity = "0.75";
        } else {
            document.getElementById("top-button").style.opacity = "0";
        }
    }

    function scrollToTop() { //scrolls the page to the top
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

    var menu_shown = false;
    function toggleOverlay() { // function that toggles the navoverlay between shown and not shown
        if (!menu_shown) { // if not shown, open navoverlay on click
            openNavOverlay();
            menu_shown = !menu_shown;
        } else { //else if shown, close it on click
            closeNavOverlay();
            menu_shown = !menu_shown;
        }
    }

    function openNavOverlay() { /* function that opens the navoverlay when the hamburger menu is clicked */
      document.getElementById("navoverlay").style.width = "100%";
      document.getElementById("menu-icon").innerHTML = '<i class="fas fa-times"></i>'}
    
    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNavOverlay() { /* function that closes the navoverlay when the hamburger menu is clicked */
      document.getElementById("navoverlay").style.width = "0%";
      document.getElementById("menu-icon").innerHTML = '<i class="fas fa-bars"></i>';
    } 
</script>