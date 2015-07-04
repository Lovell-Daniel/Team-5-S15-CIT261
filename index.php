<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PearedUp</title>
        <script type="text/javascript" src="buttons.js"></script>
        <link type="text/css" href="pearedquestions.css" rel="stylesheet">
    </head>
    <body>
        <h1>Peared Up</h1>
            
        <!-- return ?location= -->
            <div id="questionone">
                <p>Where are you located?</p> 
                <input type="text" id="loc"/>
            </div>
        
        <form>

            <!-- return &term= -->
            <p>Which photo most appeals to you?</p> 
            <div id="partone">
                <!--first term quick, sit down, formal-->
                <input type="radio" name="first" value="&term=fast"  /> Drive Thru (Photo)
                <input type="radio" name="first" value="&term=sit down" /> Sit Down (Photo)
                <input type="radio" name="first" value="&term=formal" /> Formal (Photo)
            </div>
            
            <div id="parttwo">
                <!--second term dinner lunch breakfast-->
                <input type="radio" name="second" value=" breakfast"  /> Morning (Photo)
                <input type="radio" name="second" value=" lunch"  /> Midday (Photo)
                <input type="radio" name="second" value=" dinner" /> Evening (Photo)
            </div>
            
            <div id="partthree">
                <!--third term cheap, moderate, expensive -->
                <input type="radio" name="third" value=" cheap" /> Happy Meal Toy (Photo)
                <input type="radio" name="third" value=" moderate" /> Something in-between Flowers? (Photo)
                <input type="radio" name="third" value=" expensive"  /> Diamonds (Photo)
            </div>

            <!-- return &category_filter= -->
            <div id="questionthree">
                <p>Pick a vacation spot:</p>
                    <input type="radio" name="genre" value="&category_filter=mexican" /> Mexico (photo)
                    <input type="radio" name="genre" value="&category_filter=japanese" /> Japan
                    <input type="radio" name="genre" value="&category_filter=hawaiian" /> Hawaii
                    <input type="radio" name="genre" value="&category_filter=italian" /> Italy
                    <input type="radio" name="genre" value="&category_filter=american"  /> USA
                    <input type="radio" name="genre" value="&category_filter=english" /> England
                    <input type="radio" name="genre" value="&category_filter=greek"  /> Greece
                    <input type="radio" name="genre" value="&category_filter=french"  /> France
                    <input type="radio" name="genre" value="&category_filter=african"  /> Africa          
                    <input type="radio" name="genre" value="&category_filter=seafood"  /> Atlantis
                    <input type="radio" name="genre" value="&category_filter=chinese"  /> China
                    <input type="radio" name="genre" value="&category_filter=steak" /> Desert
            </div>

            <!-- return &sort= -->
            <div id="questionfour">
                <p>How would you like your options sorted?</p>
                    <input type="radio" name="sort" value="&sort=0"/> best [0]
                    <input type="radio" name="sort" value="&sort=1"/> closest [1]
                    <input type="radio" name="sort" value="&sort=2"/> rating  [2]
            </div>

            <!-- return &radius_filter= -->
            <div id="questionfive">
                <p>How many miles are you willing to drive from your entered location?</p>
                    <input type="radio" name="radius" value="&radius_filter=10"/> 10 miles
                    <input type="radio" name="radius" value="&radius_filter=30"/> 30 miles
                    <input type="radio" name="radius" value="&radius_filter=50"/> 50 miles

            </div>
        
            <!-- return &limit= -->
            <div id="questionsix">
                <p>How many options would you like?</p>
                    <input type="radio" name="limit" value="&limit=2"/> 2 results
                    <input type="radio" name="limit" value="&limit=5"/> 5 results
                    <input type="radio" name="limit" value="&limit=10"/> 10 results
            </div>
   
        </form>
        
        <br>
        
        <button onclick="userQuery()">Display Query</button>

        <p id="demo"></p>


    </body>

</html>
