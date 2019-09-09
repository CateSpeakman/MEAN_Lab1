<!doctype html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body>
    <!--nav bar-->
    <?php include("inc/nav.php"); ?>
    <!--End of Nav Bar -->

    <main>
        <h1 class="text-center mt-2" id="galleryBanner">Check Out Our Teams in Action</h1>
        <div class="container">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item active">
                            <img src="images/raceday2.jpg" class="d-block w-100" alt="2019 Riverfront Races">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="carouselCaptions">2019 Riverfront Races</h2>
                                <p>Our Community Men's Team in Action.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/raceday3.jpg" class="d-block w-100"
                                alt="2019 Riverfront Races Division Finals">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="carouselCaptions">2019 Riverfront Races</h2>
                                <p>One of our Intergender Teams, the Dragon Handlers going for it all!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/raceday4.jpg" class="d-block w-100"
                                alt="2019 Riverfront Races Chinese Exhibition">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="carouselCaptions">2019 Riverfront Races</h2>
                                <p>The Qualifying Races</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/raceday5.jpg" class="d-block w-100"
                                alt="2019 Riverfront Races Qualifying Race">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="carouselCaptions">2019 Riverfront Races</h2>
                                <p>The Beast Slayers bringing it to get the win.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>


    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <?php include("inc/includes.php"); ?>

</body>

</html>