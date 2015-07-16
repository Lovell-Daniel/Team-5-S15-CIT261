/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
function userQuery(){


    //query_url = "http://api.yelp.com/v2/search/";
    
    loc = "location=" + document.getElementById("loc").value;

    terms = document.forms[0];
    term = "";
    i = 0;
    
    for(i; i<terms.length; i++){
        if(terms[i].checked){
            term+=terms[i].value; 
        } 
    }
    
    category = document.forms["category"]["genre"].value;
    sort = document.forms["sort"]["sort"].value; 
    radius = document.forms["radius"]["radius"].value; 
    limit = document.forms["limit"]["limit"].value; 
    
    
    
   values = loc + term + category + sort + radius + limit;
    //document.getElementById("demo").innerHTML = values;
    yelp(values, function(response) {
        var yelpObj = JSON.parse(response);
        //document.getElementById("demo").innerHTML = yelpObj.businesses[0].location.display_address[0];
        document.getElementById("demo").innerHTML = response;

    });

   
}

function nextQuestion(){

//declaring paragraph variable
var start = document.getElementById('start');
var getStarted = document.getElementById("getStarted");
var submitButton = document.getElementById("button");    
var partOne = document.getElementById("partone");
var partTwo = document.getElementById("parttwo");
var partThree = document.getElementById("partthree");
var questThree = document.getElementById("questionthree");
var questFour = document.getElementById("questionfour");
var questFive = document.getElementById("questionfive");
var questSix = document.getElementById("questionsix");
var locQuest = document.getElementById("questionone");


//add event when user clicks button
getStarted.addEventListener("click", firstText);
submitButton.addEventListener("click", userQuery);
partOne.addEventListener("change", changeText);
partTwo.addEventListener("change", changeText2);
partThree.addEventListener("change", changeText3);
questThree.addEventListener("change", changeText4);
questFour.addEventListener("change", changeText5); 
questFive.addEventListener("change", changeText6); 
questSix.addEventListener("change", changeText7); 


//function to perform when user clicks



function firstText(){
    start.style.visibility = "hidden";
    getStarted.style.visibility = "hidden"; 
    partOne.style.visibility = "visible";
    partOne.style.opacity = 1; 
    partOne.style.transition = "visibility 3s";
    window.location.hash = "#partone";
}
    
function changeText(){
    partOne.style.opacity = 0;
    partOne.style.visibility = "hidden"; 
    partOne.style.transition = "opacity .5s";
    partTwo.style.visibility = "visible";
    partTwo.style.opacity = 1; 
    partTwo.style.transition = "visibility 3s";
    window.location.hash = "#parttwo";
}

function changeText2(){
    partTwo.style.opacity = 0; 
    partTwo.style.visibility = "hidden"; 
    partTwo.style.transition = "opacity .5s";
    partThree.style.visibility = "visible";
    partThree.style.opacity = 1;    
  //  partThree.style.transform = "translateY(-140px)";
    partThree.style.transition = "visibility 3s";
    window.location.hash = "#partthree";
}

function changeText3(){
    partThree.style.opacity = 0; 
    partThree.style.visibility = "hidden"; 
    partThree.style.transition = "opacity .5s";
    questThree.style.visibility = "visible";
    questThree.style.opacity = 1;    
  //  partThree.style.transform = "translateY(-140px)";
    questThree.style.transition = "opacity 2s linear 3s";
    window.location.hash = "#questionthree";
}

function changeText4(){
    questThree.style.opacity = 0; 
    questThree.style.visibility = "hidden"; 
    questThree.style.transition = "opacity .5s";
    questFour.style.visibility = "visible"; 
    questFour.style.opacity = 1; 
   // questFour.style.transform = "translateY(-280px)";
    questFour.style.transition = "opacity 2s linear 3s";
    window.location.hash = "#questionfour";
}

function changeText5(){
    questFour.style.opacity = 0; 
    questFour.style.visibility = "hidden"; 
    questFour.style.transition = "opacity .5s";
    questFive.style.visibility = "visible"; 
    questFive.style.opacity = 1; 
  //  questFive.style.transform = "translateY(-350px)";
    questFive.style.transition = "visibility 3s";
    window.location.hash = "#questionfive";
}

function changeText6(){
    questFive.style.opacity = 0;
    questFive.style.visibility = "hidden"; 
    questFive.style.transition = "opacity .5s";
    questSix.style.visibility = "visible"; 
    questSix.style.opacity = 1; 
   // questSix.style.transform = "translateY(-420px)";
    questSix.style.transition = "visibility 3s";
    window.location.hash = "#questionsix";

}

function changeText7(){
    questSix.style.opacity = 0; 
    questSix.style.visibility = "hidden";
    questSix.style.transition = "opacity .5s";
    locQuest.style.visibility = "visible"; 
    locQuest.style.opacity = 1; 
   // questSix.style.transform = "translateY(-420px)";
    locQuest.style.transition = "visibility 3s";
    window.location.hash = "#questionone";
    submitButton.style.visibility = "visible";
    submitButton.style.opacity = 1; 
    submitButton.style.transition = "opacity 2s linear 3s";
}


}