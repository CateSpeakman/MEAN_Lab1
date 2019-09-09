"use strict";
//Description: This script will dynamically populate the page with all team information based on user
//selection of a table that generated on a previous page.  This information will be pulled from a restful http://localhost:8081/api server. 
//Author:Cate Speakman


//this is the ready function for Jquery for the onload
$(function () {

    let urlParams = new URLSearchParams(location.search);
    let teamId = urlParams.get("teamid");

    $("#registerBtn").prop("href", "addTeamMember.php?teamid=" + teamId);
    $("#backBtn").prop("href", "search.php");

    let obj;
    //this will populate the card for team info and for the team rules
    $.getJSON("http://localhost:8081/api/teams/" + teamId, function (team) {
        obj = team;
        $("#teamInfoCard").php(obj.TeamName);
        $("#cardText1").php("League: " + obj.League);
        $("#cardText2").php("Manager Name: " + obj.ManagerName);
        $("#cardText3").php("Manager Phone: " + obj.ManagerPhone);
        $("#cardText4").php("Manager Email: " + obj.ManagerEmail);
        $("#rulesCard").php("Team Rules");
        $("#cardText5").php("Maximum # Team Members: " + obj.MaxTeamMembers);
        $("#cardText6").php("Minimum Member Age: " + obj.MinMemberAge);
        $("#cardText7").php("Maximum Member Age: " + obj.MaxMemberAge);
        $("#cardText8").php("Team Gender: " + obj.TeamGender);


        //this if statement will look to see if any team members are registered and if so display the list
        if (obj.Members.length == 0) {
            $("#memberListDiv").hide();
        }
        else {
            $("#memberListDiv").show();
        }
        for (let i = 0; i < obj.Members.length; i++) {

            let memberRow = "<tr><td>" + obj.Members[i].MemberName
                + "</td><td>" + obj.Members[i].Email
                + "</td><td>" + obj.Members[i].Phone
                + "</td></tr>";
            $("#memberTable tbody").append(memberRow);

        }//ends for loop

    })//ends JSON function

});//ends the onload function           


