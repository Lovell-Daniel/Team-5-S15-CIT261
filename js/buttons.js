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
   document.getElementById("demo").innerHTML = values;
   
}

function nextQuestion(){

//declaring paragraph variable

var submitButton = document.getElementById("button");    
var partOne = document.getElementById("partone");
var partTwo = document.getElementById("parttwo");
var partThree = document.getElementById("partthree");
var questThree = document.getElementById("questionthree");
var questFour = document.getElementById("questionfour");
var questFive = document.getElementById("questionfive");
var questSix = document.getElementById("questionsix");


//add event when user clicks button
submitButton.addEventListener("click", userQuery);
partOne.addEventListener("click", changeText);
partTwo.addEventListener("click", changeText2);
partThree.addEventListener("click", changeText3);
questThree.addEventListener("click", changeText4);
questFour.addEventListener("click", changeText5); 
questFive.addEventListener("click", changeText6); 
questSix.addEventListener("click", changeText7); 

//function to perform when user clicks
function changeText() {
    partOne.style.opacity = 0;
    partOne.style.transition = "all 1s";
    partTwo.style.opacity = 1; 
    partTwo.style.transform = "translateY(-70px)";
    partTwo.style.transition = "all 1s";
}

function changeText2(){
    partTwo.style.opacity = 0; 
    partTwo.style.transition = "all 1s";
    partThree.style.opacity = 1;    
    partThree.style.transform = "translateY(-140px)";
    partThree.style.transition = "all 1s";
}

function changeText3(){
    partThree.style.opacity = 0; 
    partThree.style.transition = "all 1s";
    questThree.style.opacity = 1;
    questThree.style.transform = "translateY(-210px)";
    questThree.style.transition = "all 1s";
}

function changeText4(){
    questThree.style.opacity = 0; 
    questThree.style.transition = "all 1s";
    questFour.style.opacity = 1; 
    questFour.style.transform = "translateY(-280px)";
    questFour.style.transition = "all 1s";
}

function changeText5(){
    questFour.style.opacity = 0; 
    questFour.style.transition = "all 1s";
    questFive.style.opacity = 1; 
    questFive.style.transform = "translateY(-350px)";
    questFive.style.transition = "all 1s";
}

function changeText6(){
    questFive.style.opacity = 0; 
    questFive.style.transition = "all 1s";
    questSix.style.opacity = 1; 
    questSix.style.transform = "translateY(-420px)";
    questSix.style.transition = "all 1s";
}

function changeText7(){
    questSix.style.opacity = 0; 
    questSix.style.transition = "all 1s";
    submitButton.style.opacity = 1; 
    submitButton.style.transform = "translateY(-490px)";
}

}