function yelp(values, callback) {
    var httpRequest = new XMLHttpRequest(); //doesn't work with <MSIE7
    if (!httpRequest) {
        //alert for older browsers that don't support XMLHttpRequest
        alert('Cannot create XMLHTTP instance');
    } else {
        //this function runs at each change in state from 0 to 4
        httpRequest.onreadystatechange = function() {
            //however it only works when state is 4 and status is 200
            if (httpRequest.readyState === 4 && httpRequest.status === 200) {
                //this is the code that runs when successful
                //warning: code must be here to use response
                //if it is run elsewhere then it may run out of order
                //because rest of code is run before response is received
                callback(httpRequest.responseText);
            }
        };
        httpRequest.open('GET', "yelp.php?" + values);
        httpRequest.send();
    }
}
