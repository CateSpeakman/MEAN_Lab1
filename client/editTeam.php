<!doctype html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body>
    <!--nav bar-->
    <?php include("inc/nav.php"); ?>
    <!--End of Nav Bar -->
    <main>
        <div class="container">
            <h1 id="editTeamBanner">Edit Team</h1>
            <p> Edit the information below. Once changes have been made, click on edit to save team
                information. </p>

            <!-- this form will allow the user to edit a team information-->
            <form id="editTeamForm">

                <input type="hidden" id="teamid" name="teamid">

                <div class="form-row">
                    <div class=" form-group col-md-4">
                        <label class="form-check-label" for="league">League:</label>
                        <input type="text" class="form-control" id="league" name="leaguecode" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="teamname">Team Name</label>
                        <input type="text" class="form-control" id="teamname" name="teamname" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="managername">Manager Name</label>
                        <input type="text" class="form-control" id="managername" name="managername" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="managerphone">Manager Phone</label>
                        <input type="tel" class="form-control" id="managerphone" name="managerphone" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="manageremail">Manager Email</label>
                        <input type="email" class="form-control" id="manageremail" name="manageremail" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="maxteammembers">Max # Team Members</label>
                        <input type="text" class="form-control" id="maxteammembers" name="maxteammembers" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="minmemberage">Minimum Member Age</label>
                        <input type="text" class="form-control" id="minmemberage" name="minmemberage" required readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="maxmemberage">Maximum Member Age</label>
                        <input type="text" class="form-control" id="maxmemberage" name="maxmemberage" required readonly>
                    </div>
                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" name="teamgender" id="male" value="Male">
                    <label class="form-check-label" for="male">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="teamgender" id="female" value="Female">
                    <label class="form-check-label" for="female">Female</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="teamgender" id="any" value="Any">
                    <label class="form-check-label" for="any">Any</label>
                </div>
            </form>

            <!-- this section will contain the save button and cancel button-->
            <div class="container">
                <div class="row">
                    <button type="button" id="editBtn" class="btn btn-info mt-2">Save</button>
                    <a href="#" id="cancelBtn" class="btn btn-info mt-2 ml-3" role="button">Cancel</a>
                </div>
            </div>

<!-- this section will display any error messages generated during form validation-->
            <div class="container">
                <div id="msgDiv">
                    <ul id="errorMessages"></ul>
                </div>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <?php include("inc/includes.php"); ?>

    <script src="scripts/editTeam.js"></script>
</body>

</html>