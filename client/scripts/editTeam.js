"use strict";
//Description: This script will dynamically populate the page with all team information based on user
//selection of a table that generated on a previous page.  This information will be pulled from a restful http://localhost:8081/api server. 
//Author:Cate Speakman


//this is the ready function for Jquery for the onload
$(function () {


    $("#cancelBtn").prop("href", "search.php");


    let urlParams = new URLSearchParams(location.search);
    let teamid = urlParams.get("teamid");

    let obj;
    //this ajax call will populte all of the existing team information

    $.getJSON("http://localhost:8081/api/teams/" + teamid, function (team) {
        obj = team;
        $("#teamid").val(obj.TeamId);
        $("#teamname").val(obj.TeamName);
        $("#league").val(obj.League);
        $("#managername").val(obj.ManagerName);
        $("#managerphone").val(obj.ManagerPhone);
        $("#manageremail").val(obj.ManagerEmail);
        $("#maxteammembers").val(obj.MaxTeamMembers);
        $("#minmemberage").val(obj.MinMemberAge);
        $("#maxmemberage").val(obj.MaxMemberAge);
        $("input[name='teamgender'][value='" + obj.TeamGender + "']").prop("checked", true)

    })//ends JSON function to find team name and insert into form 

    const allInputTextFields =
        document.querySelectorAll("input[type='text'], input[type='email'], input[type='tel']");

    //this will make all fields have a beige background when user is in text box
    for (let i = 0; i < allInputTextFields.length; i++) {
        allInputTextFields[i].onfocus = function () {
            this.style.backgroundColor = "beige";
        };

        allInputTextFields[i].onblur = function () {
            this.style.backgroundColor = "";
        };

    }//ends the for loop 


    //this on click will call the form validation function and perform ajax call if validation is good

    $("#editBtn").on("click", function () {
        let isValid = formValidation();

        if (isValid == false) {
            return false;
        }

        $.ajax({
            url: 'http://localhost:8081/api/teams', // your api url
            // jQuery < 1.9.0 -> use type
            // jQuery >= 1.9.0 -> use method
            data: $("#editTeamForm").serialize(),
            method: 'PUT', // method is any HTTP method
            success: function () {
                window.location.href = "teamDetails.php?teamid=" + $("#teamid").val();
            }
        });//ends ajax call

        return false;
    });//end of on click function


});//ends the onload function           

//this function performs the form validation
function formValidation() {

    $("#errorMessages").empty();

    let errMsg = [];

    if ($("#teamname").val().trim() == "") {
        errMsg[errMsg.length] = "Team Name is required";
    }

    if ($("#managername").val().trim() == "") {
        errMsg[errMsg.length] = "Manager Name is required";
    }

    if ($("#managerphone").val().trim() == "") {
        errMsg[errMsg.length] = "Manager Phone is required";
    }


    let emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    let email = $("#manageremail").val();


    if (emailPattern.test(email) == false) {
        errMsg[errMsg.length] = "Valid email address is required";
    }//ends if statement for email validation


    if ($("#maxteammembers").val().trim() == "") {
        errMsg[errMsg.length] = "Maximum # Team Members is required";
    }

    
    if (errMsg.length == 0) {
        return true;
    }
    else {
        for (let i = 0; i < errMsg.length; i++) {
            $("<li>" + errMsg[i] + "</li>").appendTo($("#errorMessages"));
        }
        return false;
    }
}//ends form validation function
