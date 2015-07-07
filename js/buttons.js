/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function userQuery(){

    //query_url = "http://api.yelp.com/v2/search/";
    
    location = "location=" + document.getElementById("loc").value;

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
    
    
    
   values = location + term + category + sort + radius + limit;
   document.getElementById("demo").innerHTML = values;
   
}
