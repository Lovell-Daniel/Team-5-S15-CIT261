/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function userQuery(){

    query_url = "http://api.yelp.com/v2/search/";
    
    loc = "location=" + document.getElementById("loc").value;

    options = document.forms[0];
    txt = "";
    i = 0;
    
    for(i; i<options.length; i++){
        if(options[i].checked){
            txt+=options[i].value; 
        } 
    }
   values = loc + txt;
   document.getElementById("demo").innerHTML = values;
   
}



    
