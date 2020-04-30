<div class="page-header-parallax-overlay" id="parallax1" style="background-image:url('/images/clouds1.png'); top:50vh;"></div>
<div class="page-header-parallax-overlay" id="parallax2" style="background-image:url('/images/clouds2.png'); top:50vh;"></div>
<script>
    var background1 = document.getElementById("parallax1");
    var background2 = document.getElementById("parallax2");
                
    function ParallaxFunction() {
        var scroll = window.pageYOffset;
        var vh = document.documentElement.clientHeight;
                    
        if (scroll < 1*vh) { //while the screen hasnt been scrolled for more than 1 vh
            //background1.style.top = -(scroll * 0.04) + 50 + 'vh'; //original absolute positioning method, less efficient
            background1.style.transform = "translate(0,"+(-(scroll * 0.06))+"vh)"; //new translation positioning method, more efficient
                    
            //background2.style.top = -(scroll * 0.07) + 35 + 'vh';
            background2.style.transform = "translate(0,"+(-(scroll * 0.1))+"vh)"; //new translation positioning method, more efficient
        }  
    }
</script>