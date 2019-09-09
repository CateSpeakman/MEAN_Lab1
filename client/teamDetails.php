<!doctype html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body>
    <!--nav bar-->
    <?php include("inc/nav.php"); ?>
    <!--End of Nav Bar -->
    <h1 class="mb-5 text-center" id="banner">Harvey Lake Dragon Boats</h1>
    <main>

        <!-- this section will contain bootstrap cards to be displayed upon a team being selected from
        the search page-->
        <div class="container">
            <div class="row">
                <section class="col-md-4" id="teamCardContainer">
                    <div id="teamCard" class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title" id="teamInfoCard">&nbsp;</h4>
                            <p class="card-text" id="cardText1">&nbsp;</p>
                            <p class="card-text" id="cardText2">&nbsp;</p>
                            <p class="card-text" id="cardText3">&nbsp;</p>
                            <p class="card-text" id="cardText4">&nbsp;</p>
                        </div>
                    </div>
                </section>

                <section class="col-md-4" id="rulesCardContainer">
                    <div id="teamRuleCard" class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title" id="rulesCard">&nbsp;</h4>
                            <p class="card-text" id="cardText5">&nbsp;</p>
                            <p class="card-text" id="cardText6">&nbsp;</p>
                            <p class="card-text" id="cardText7">&nbsp;</p>
                            <p class="card-text" id="cardText8">&nbsp;</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- this section will only display if team members are signed up for the team -->
        <section>
            <div class="container" id="memberListDiv">
                <h3 class="mt-4">Team Members</h3>
                <table class="table table-striped col-md-6" id="memberTable">
                    <thead>
                        <tr>
                            <th>Member Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </section>
        <!-- this section contains the register a member button and back button as this page is not part
        of the navigation-->

        <div class="container">
            <a href="#" id="registerBtn" class="btn btn-info" role="button">Register Member</a>
            <a href="#" id="backBtn" class="btn btn-info" role="button">Back</a>
        </div>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <?php include("inc/includes.php"); ?>

    <script src="scripts/teamDetails.js"></script>
</body>

</html>