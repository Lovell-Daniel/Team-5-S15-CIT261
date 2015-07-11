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
submitButton.addEventListener("click", userQuery)
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
    partTwo.style.opacity = 1; 
}

function changeText2(){
    partTwo.style.opacity = 0; 
    partThree.style.opacity = 1;     
}

function changeText3(){
    partThree.style.opacity = 0; 
    questThree.style.opacity = 1;
}

function changeText4(){
    questThree.style.opacity = 0; 
    questFour.style.opacity = 1; 
}

function changeText5(){
    questFour.style.opacity = 0; 
    questFive.style.opacity = 1; 
}

function changeText6(){
    questFive.style.opacity = 0; 
    questSix.style.opacity = 1; 
}

function changeText7(){
    questSix.style.opacity = 0; 
    submitButton.style.opacity = 1; 
}

}