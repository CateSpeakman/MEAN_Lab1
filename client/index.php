<!doctype html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body>
    <!--nav bar-->
   <?php include("inc/nav.php"); ?> 
    <!--End of Nav Bar -->

    <h1 class="mb-5 text-center" id="banner">Harvey Lake Dragon Boats</h1>
    
    <main>

        <!-- this section will contain the three images with links to the main pages of the website-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="320" height="158"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: 140x140">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                        <image href="images/boat1.jpg" x="0" y="0" height="100%" width="100%" />
                    </svg>
                    <h2>About Us</h2>
                    <p>To learn more about Harvey Lake Dragon Boats and the history of dragon boats click on the button
                        below.</p>
                    <p><a class="btn btn-info" href="about.php" role="button">View details &raquo;</a></p>
                </div>

                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="300" height="225"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: 140x140">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                        <image href="images/raceday.jpg" x="0" y="0" height="100%" width="100%" />
                    </svg>
                    <h2>Search</h2>
                    <p>Look up our teams by their league or check them all out here! Click below to start
                        exploring! </p>
                    <p><a class="btn btn-info" href="search.php" role="button">View details &raquo;</a></p>
                </div>

                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="275" height="183"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: 140x140">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                        <image href="images/rowing.jpg" x="0" y="0" height="100%" width="100%" />
                    </svg>
                    <h2>Gallery</h2>
                    <p>Our teams compete all over the country trying to be the best they can be. Check out some of
                        pictures from our most recent races here </p>
                    <p><a class="btn btn-info" href="gallery.php" role="button">View details &raquo;</a></p>
                </div>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/includes.php"); ?>

</body>

</html>