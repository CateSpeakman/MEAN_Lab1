<!doctype html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body>
    <!--nav bar-->
    <?php include("inc/nav.php"); ?>
    <!--End of Nav Bar -->

    <main>
        <section>
            <!-- this section will allow the user to register for the team they were previously 
            reviewing on the details page-->
            <div class="container">
                <h1 id="addMemberBanner">Add New Member</h1>
                <p> To register a new team member please enter the information below. Once all fields have
                    been completed, click on register to save the member information to the team. </p>
                <!-- this starts the registration form-->
                <form id="registerForm" name="registerForm">
                    <div class="container">
                        <div class="form-group row">
                            <label for="teamName" class="col-sm-2 col-form-label ml-3">Team Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="teamName" id="teamName" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group row">
                            <label for="league" class="col-sm-2 col-form-label ml-2">League</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="league" id="league" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group row">
                            <label for="memberName" class="col-sm-2 col-form-label">Member Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="membername" id="memberName"
                                    placeholder="Member Name" required>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group row">
                            <label for="contactName" class="col-sm-2 col-form-label">Contact Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="contactname" id="contactName"
                                    placeholder="Contact Name" required>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group row">
                            <label for="age" class="col-sm-2 col-form-label">Age</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="age" id="age" placeholder="Age" required>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
                            <label class="form-check-label" for="male">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-4">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone"
                                    required>
                            </div>
                        </div>
                    </div>
                    <!-- this contains the Register button, the reset button, and cancel buttons-->
                    <div class="container">
                        <button id="saveBtn" type="button" class="btn btn-info">Register</button>
                        <button id="resetBtn" type="reset" class="btn btn-info ml-3">Reset</button>
                        <a href="#" id="cancelBtn" class="btn btn-info ml-3" role="button">Cancel</a>
                    </div>

                    <!-- this section will display any error messages that are generated during the form validation -->
                    <div class="container" id="msgDiv">
                        <ul id="errorMessages"></ul>
                    </div>
                    </form>
            </div>
        </section>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <?php include("inc/includes.php"); ?>
    <script src="scripts/addTeamMember.js"></script>
</body>

</html>