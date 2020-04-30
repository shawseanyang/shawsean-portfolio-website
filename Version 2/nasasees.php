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
            <div class="page-header" style="background-image:url('/images/bastrop-field.jpg'); background-position: top center;"alt="page header image"> 
                <p class="title">NASA SEES Internship</p>
                <p class="subtitle">Projects</p>
            </div>
            <?php include "navbar.php" ?>
            <div class="content-container">
                <div class="page-table-of-contents">
                    <ul>
                        <li><p class="title">On This Page</p></li>
                        <li><a class="link" href="#aboutnasasees">About NASA SEES</a></li>
                        <li><a class="link" href="#worksummary">Work Summary</a></li>
                        <li><a class="link" href="#personaltakeaways">Personal Takeaways</a></li>
                        <li><a class="link" href="#background">Background</a></li>
                        <li><a class="link" href="#ourresearch">Our Research</a></li>
                        <li><a class="link" href="#conclusions">Conclusions</a></li>
                    </ul>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="aboutnasasees"></a>
                    <p class="title">About NASA SEES</p>
                    NASA SEES is a <span class="bold">nationally competitive STEM summer intern program</span> for high school students.
                    Interns learn how to <span class="bold">interpret NASA satellite data</span> while working with scientists and engineers.
                    Among <span class="bold">600+ applicants</span>, my <span class="bold">60 fellow interns and I were chosen</span> for the internship,
                    sponsored by NASA and the UT Center for Space Research.
                </div>
                <div class="content-card">
                    <a class="bookmark" id="worksummary"></a>
                    <p class="title">Our Research Work</p>
                    During the internship, <span class="bold">my team of 7 and I</span> investigated the <span class="bold">regrowth of vegetation after the Bastrop Complex wildfire</span> of 2011
                    and the <span class="bold">correlation between vegetation regrowth and burn severity</span>.
                    Guided by our scientist mentors, we conducted our research by <span class="bold">processing Landsat satellite imagery</span> programmatically using <span class="bold">Python and QGIS</span>,
                    a geographic information system. Effectively, we asked, "How much green has grown back?"
                </div>
                <div class="quote-card">
                    We asked,
                    <p class="title">"How Much <span class="bold">Green</span> Has Grown Back?"</p>
                </div>
                <div class="content-card">
                    <img src="/images/burn-severity-heat-map.jpg">
                    <figcaption>Burn severity heat map we generated using Python scripts and QGIS using Landsat 5 satellite images.</figcaption>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="personaltakeaways"></a>
                    <p class="title">Personal Takeaways</p>
                    <div class="content-subcard">
                        <p class="title">Applying Code to a Real Professional Purpose</p>
                        This work was very <span class="bold">relevant to me career-wise</span> since I am working towards the field of applied computer science.
                        Our research involved applying coding to a real, professional purpose.
                        As part of my team, one of <span class="bold">my main responsibilities was crafting the scripts</span>
                        that would <span class="bold">process the satellite images to produce</span> the <span class="bold">indices</span> we needed.
                    </div>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="background"></a>
                    <p class="title">The Most Destructive Wildfire in Texas History</p>
                    <div class="content-subcard">
                        <p class="title">Background On Wildfires</p>
                        Wildfires occur naturally in many forest ecosystems and promote species diversity by clearing flammable undergrowth,
                        thinning old trees, accelerating the carbon cycle, and replenishing nutrients.
                        Yet, with the <span class="bold">human introduction of fire suppression</span>,
                        <span class="bold">undergrowth builds up</span> and the <span class="bold">risk of a detrimental high-temperature flame rises</span>.
                        The aftermath of these wildfires varies widely depending on environmental variables like species,
                        soil composition, weather, and seed production.
                        Considering the impracticalities of surveying large areas through fieldwork,
                        <span class="bold">remote sensing through satellite imagery</span> allows for a more <span class="bold">holistic overview of the entire region</span>.
                    </div>
                    <div class="content-subcard">
                        <p class="title">The Bastrop County Wildfire</p>
                        In <span class="bold">2011, central</span> Texas experienced its most <span class="bold">extreme drought</span> since the 1950s,
                        as well as the hottest U.S. summer on record.
                        These already-extreme conditions created am environment ideal for propagating the conflagration. 
                        After the original <span class="bold">burns were ignited from sparks from fallen power lines</span>,
                        the wildfire converged from three smaller fires into one major entity over several days in early <span class="bold">September</span> 2011.
                    </div>
                    <div class="content-subcard">
                        <p class="title">Aftermath</p>
                        Due to the <span class="bold">winds of Tropical Storm Lee</span>,
                        the <span class="bold">fire continued to spread</span> over a month,
                        <span class="bold">killing two</span> people, <span class="bold">destroying 96% of Bastrop State Park</span> (home to the indigenous <span class="bold">Loblolly Pine</span>),
                        and burning <span class="bold">$325 million worth of property</span> before being fully extinguished on October 29, 2011.
                    </div>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="ourresearch"></a>
                    <p class="title">Our Research</p>
                    <div class="content-subcard">
                        <p class="title">Objectives</p>
                        After performing background research, we gained an understanding of past work around Bastrop and other wildfires.
                        <span class="bold">Although vegetation regrowth immediately following the wildfire is well-documented</span>,
                        <span class="bold">longer periods of time</span> are typically <span class="bold">more effective in capturing the extended cycle of forest recovery</span>.
                        <span class="bold">Our investigation aimed</span> to explore:
                        <ol>
                            <li><span class="bold">How</span> can <span class="bold">remote sensing techniques</span> be used to <span class="bold">evaluate the long-term effects of the Bastrop County wildfire</span> and determine whether these <span class="bold">trends</span> are temporary or lasting?</li>
                            <li>What are the <span class="bold">relationships between burn severity and post-fire vegetation recovery</span> as tracked using remote sensing <span class="bold">indices like NDVI and dNBR</span>?</li>
                            <li><span class="bold">What</span> environmental <span class="bold">factors influence</span> the nature of <span class="bold">post-fire vegetation dynamics</span>?</li>
                        </ol>
                    </div>
                    <div class="content-subcard">
                        <p class="title">Data Acquisition</p>
                        To survey the large Bastrop Complex fire region, we utilized and processed <span class="bold">18 Landsat 5 and 8 satellite images from 2009 to 2018</span>.
                        Landsat measures <span class="bold">multispectral surface reflectance</span> in <span class="bold">Near Infrared</span> (NIR), <span class="bold">Shortwave Infrared</span> (SWIR), and <span class="bold">Visible light</span> bands.
                        We selected the dates for our data using the <span class="bold">Landlook Viewer and USGS Earth Explorer</span> based on image quality,
                        cloud cover, and time of year in relation to the date of the 2011 fire.
                        <img src="/images/landsat.jpg">
                        <figcaption>Landsat 8, earth observation satellite equiped with the OLI & TIRS sensors</figcaption>
                    </div>
                    <div class="content-subcard">
                        <p class="title">Measuring Burn Severity and Vegetation Regrowth</p>
                        The <span class="bold">Difference Normalized  Burn Ratio</span> (dNBR) and <span class="bold">Normalized Difference Vegetation Index</span> (NDVI) are common indices used to <span class="bold">quantify burn severity and vegetation growth, respectively</span>.
                        dNBR is calculated with NIR and SWIR bands from Landsat while NDVI incorporates NIR and Visible Red bands.
                        We <span class="bold">quantified burn severity using the dNBR index</span>, revealing <span class="bold">patterns</span> regarding the <span class="bold">progression and impact of the fire</span>.
                    </div>
                    <div class="content-subcard">
                        <p class="title">Data Processing</p>
                        To <span class="bold">extract</span> the <span class="bold">dNBR and NDVI indices</span> from the satellite images, <span class="bold">we wrote scripts in Python and QGIS</span>. The scripts:
                        <ol>
                            <li><span class="bold">Clipped</span> the raw imagery <span class="bold">to the burn scar region</span></li>
                            <li>Calculated a <span class="bold">heat map of dNBR and NDVI</span></li>
                            <li>Defined <span class="bold">thresholds for burn severity</span> based on dNBR value frequencies</li>
                            <li>Generated <span class="bold">maps and graphs of vegetation regrowth</span> (NDVI) <span class="bold">for each burn severity</span> (dNBR)</li>
                            <li>Generated <span class="bold">statistics</span> (mean and standard deviation) for each of these maps</li>
                        </ol>
                        
                        <img src="/images/data-processing.jpg">
                        <figcaption>Spectral data mid-processing with analyzed region highlighted.</figcaption>
                    </div>
                    <div class="content-subcard">
                        <p class="title">Burn Severity Results</p>
                        The <span class="bold">dNBR heat map</span> exhibits a <span class="bold">vertical strip of high severity</span>, indicating the southerly <span class="bold">direction of the wind</span> that propagated the flames.
                        Pockets of <span class="bold">varying burn severity</span> are influenced by other factors including <span class="bold">species, geographic context, and fire movement</span>.
                        <img src="/images/burn-severity-heat-map.jpg">
                        <figcaption>Burn severity heat map we generated using Python scripts and QGIS using Landsat 5 satellite images.</figcaption>
                    </div>
                    <div class="content-subcard">
                        <p class="title">Vegetation Regrowth Results</p>
                        The resulting plots illustrate the <span class="bold">gradual decline of prefire vegetation</span> (NDVI) due to the worsening Texas <span class="bold">drought</span>,
                        leading up to the <span class="bold">significant drop in vegetation</span> (NDVI) from the <span class="bold">Bastrop Complex Fire in 2011</span>.
                        The general trend also depicts <span class="bold">fluctuations</span> due to varying <span class="bold">drought and precipitation levels</span>,
                        including in <span class="bold">2015 and 2018</span> due to hotter and drier conditions.
                        The <span class="bold">2011 drop</span> in vegetation (NDVI) is <span class="bold">followed by a significant increase</span>, with levels <span class="bold">after 2013</span> and onwards appearing <span class="bold">comparable to prefire vegetation</span> (NDVI) levels.
                        <span class="bold">Since NDVI measures all greenery</span>, both grasses and trees factor into the value.
                        Considering that <span class="bold">in reality, the forest recovered slowly</span>, this <span class="bold">rapid recovery</span> can be <span class="bold">attributed to</span> the regrowth of <span class="bold">grassy vegetation</span> after the fire. 
                    </div>
                    <div class="content-subcard">
                        <img src="/images/ndvi-means-by-category.jpg">
                        <figcaption>Vegetation regrowth (NDVI) means per burn severity (dNBR) category.</figcaption>
                    </div>
                    <div class="content-subcard">
                        Each colored line corresponds to <span class="bold">defined burn severities (Unburned, Low, 
                        Moderate, and High Severity)</span>. The patterns displayed by the various burn 
                        severities are fairly similar to the general trend, but the <span class="bold">Unburned and Low 
                        Severity lines appear to have more fluctuations</span>, indicating that they are more 
                        influenced by <span class="bold">changes in heat and precipitation</span> while more <span class="bold">severely burned 
                        areas were more focused on regrowth</span>.
                    </div>
                    <div class="content-subcard">
                        <img src="/images/ndvi-percent-change-bar-graph.jpg">
                        <figcaption>Percent change in vegetation regrowth (NDVI) over time per burn severity category for three chosen clusters of time.</figcaption>
                    </div>
                    <div class="content-subcard">
                        In the first two clusters, the higher severity levels experienced a greater percent change in 
                       NDVI, but the most <span class="bold">recent</span> cluster shows the <span class="bold">four severity levels</span> experiencing 
                       <span class="bold">similar percent changes</span>, suggesting a <span class="bold">plateau point</span>.
                    </div>
                    <div class="content-subcard">
                        <p class="title">Ground Truthing</p>
                        To <span class="bold">confirm the geographical features</span> observed by the spectral analysis of Landsat 
                        bands, <span class="bold">qualitative field data</span> was collected across various sampling points in 
                        the <span class="bold">Griffith League Scout Ranch</span>. The variance of vegetation regrowth appears to 
                        be <span class="bold">largely consistent with predictions</span> of NDVI and dNBR using satellite imagery.
                        <img src="/images/field-study.jpg">
                        <figcaption>Photo from the field study comparing the burned region (left) and the unburned region (right).</figcaption>
                    </div>
                </div>
                <div class="content-card">
                    <a class="bookmark" id="conclusions"></a>
                    <p class="title">Conclusions</p>
                    Both the satellite analysis and field investigation validate 
                    the expected contrast of behavior between burned versus unburned areas and the 
                    different levels of burn severity.
                    <ol>
                        <li>
                            Areas of <span class="bold">higher burn severity</span> tended to have 
                            <span class="bold">greater changes in NDVI</span>, although this <span class="bold">may be temporary</span> as the <span class="bold">NDVI leveled off</span> 
                            in more recent years
                        </li>
                        <li>
                            Mean NDVI over time indicated a rapid recovery, 
                            but the field study indicated that there are still drastic <span class="bold">differences by burn 
                            severity in terms of vegetation count and form</span>. 
                            This is due to the regrowth of fast-growing grassy vegetation contributing to the NDVI values. The longer rebound period can 
                            be attributed to the severity of the disaster.
                        </li>
                        <li>
                            Natural and anthropogenic factors such as areas 
                            with targeted <span class="bold">replanting, streams, and natural regeneration</span> tended to <span class="bold">recover 
                            faster</span> than areas with post-fire logging.
                        </li>
                    </ol>
                    <div class="content-subcard">
                        <p class="title">Future Research</p>
                        The positive correlation between burn severity and vegetation 
                        regrowth opens up investigations regarding the <span class="bold">severity of prescribed controlled 
                        burns best suited for maximizing ecosystem health</span>. Similar ground-truthing methodologies 
                        may also provide avenues to explore the <span class="bold">effects of species diversity on regrowth</span>.
                    </div>
                    <div class="content-subcard">
                        <p class="title">Acknowledgements</p>
                        We would like to thank <span class="bold">Teresa Howard</span> of the University of Texas at Austin Center for Space Research
                        for her mentorship, along with the <span class="bold">Texas Space Grant Consortium</span> for directing the
                        <span class="bold">Stem Enhancement in Earth Science</span> (SEES) program.
                        <img src="/images/sees-team.jpg">
                        <figcaption>Our team at the Texas Capitol</figcaption>
                    </div>
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