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
        <script type="text/javascript" src="js/yelp.js"></script>
        <script type="text/javascript" src="js/buttons.js"></script>
        <script src="/js/use.typekit.net_yrj6xqv.js"></script>
        <script>try {
                Typekit.load();
            } catch (e) {
            }</script>
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <link type="text/css" href="css/pearedquestions.css" rel="stylesheet">
    </head>
    <body onload="nextQuestion()">

        <img src="images/yelp_logo_100x50.png" alt="yelp" title="yelp" id="yelp"/>

        <div id="content">
            <div id="start">
                <img src="images/pearedlogo.png" id="welcome" class="welcome fadeIn" title="logo" alt="logo">
                <p id="welcome2" class="welcome2 fadeIn"> Welcome to Peared Up, the app that pairs you with the perfect restaurant instantly!</p>



                <button type="submit" id="getStarted" class="started fadeIn">Let's Get Started!</button>
                <button type="submit" id="lastSearch" class="started fadeIn">See Most Recent Search!</button>

            </div>

            <!-- return ?location= -->
            <div id="questionone">
                <img src="images/pearedlogo.png" alt="logo" title="logo" class="mini"/>

                <p>Where are you located?</p> 

                <input type="text" id="loc"/>
                <br>
                <button id="button">Submit</button>

                <p id="demo"></p>
                <p id="json"></p>               
            </div>

            <!-- return results -->
            <div id="results">
                <img src="images/pearedlogo.png" alt="logo" title="logo" class="mini" id="resultlogo"/>
                <br><br>
                <!--<button id="startover" onclick="window.location='index.php'">Start Over!</button>-->
                <!--<button id="startover" onclick="window.location.reload()">Start Over!</button>-->
                <button id="startover" onclick="window.location = ''">Start Over!</button>
                <div id="output"></div>

            </div>


            <!-- return &term= -->
            <form>
                  <!--first term quick, sit down, formal-->
                <div id="partone">
                    <img src="images/pearedlogo.png" alt="logo" title="logo" class="mini"/>
                    <p>
                        Please answer the following questions to best determine your dining destination:
                        <br><br>Which photo most appeals to you?
                    </p>
                  
                    <table class="table">
                        <tr>
                            <td>
                                <img src="images/sit-down.png" alt="sitdown" title="sitdown">
                                <br>
                                <input type="radio" name="first" value="&term=sit down"> 
                                <br>
                            </td>


                            <td>
                                <img src="images/drivethru.png" alt="drivethru" title="drivethru">
                                <br>
                                <input type="radio" name="first" value="&term=fast">  
                                <br>
                            </td> 


                            <td>
                                <img src="images/formal1.png" alt="formal" title="formal">
                                <br>
                                <input type="radio" name="first" value="&term=formal">
                                <br>
                            </td>                          
                        </tr>
                    </table>
                </div>
                
 <!--second term dinner lunch breakfast-->
                <div id="parttwo" class="stack">
                    <img src="images/pearedlogo.png" alt="logo" title="logo" class="mini"/>
                    <p>Pick a sound.</p>
                   
                    <table class="table">
                        <tr>
                            <td>
                                <audio controls>
                                    <source src="audio/morning.mp3" />
                                </audio> 
                                <br>
                                <input type="radio" name="second" value=" breakfast"/>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <audio controls>
                                    <source src="audio/lunch.mp3"/>
                                </audio> 
                                <br>
                                <input type="radio" name="second" value=" lunch"/> 
                                <br>
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                <audio controls>
                                    <source src="audio/dinner.mp3" />
                                </audio> 
                                <br>
                                <input type="radio" name="second" value=" dinner" />
                                <br>
                            </td>                          
                        </tr>
                    </table>

                </div>

                <!--third term cheap, moderate, expensive -->
                <div id="partthree" class="stack">
                    <img src="images/pearedlogo.png" alt="logo" title="logo" class="mini"/>
                    <p>Which describes your current mood?</p>
                    <table class="table">
                        <tr>
                            <td>
                                <img src="images/static1.squarespace.gif" title="poor" id="poor">
                                <br>
                                <input type="radio" name="third" value=" cheap" /> 
                                <br>
                            </td>


                            <td>
                                <img src="images/snl5.gif" title="moderate" id="gif">
                                <br>
                                <input type="radio" name="third" value=" moderate" />   
                                <br>
                            </td> 


                            <td>
                                <img src="images/tumblr_niwf9lBNff1qjshvjo1_400.gif" title="expensive">
                                <br>
                                <input type="radio" name="third" value=" expensive"  />
                                <br>
                            </td>                          
                        </tr>
                    </table>
                </div>
            </form>


            <!-- return &category_filter= -->
            <form name="category">
                <div id="questionthree" class="stack">
                    <img src="images/pearedlogo.png" alt="logo" title="logo" class="mini"/>
                    <p>Pick a vacation spot:</p>
                    <table class="table">
                        <tr>
                            <td>
                                <img src="images/mexico.png" title="mexico">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=mexican" /> 
                                <br>
                            </td>


                            <td>
                                <img src="images/japan.png" title="japan">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=japanese" />   
                                <br>
                            </td> 


                            <td>
                                <img src="images/hawaii.png" title="hawaii">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=hawaiian" />
                                <br>
                            </td>                          
                        </tr>
                        <tr>
                            <td>
                                <img src="images/italy.png" title="italy">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=italian" /> 
                                <br>
                            </td>


                            <td>
                                <img src="images/usa.png" title="usa">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=american"  />   
                                <br>
                            </td> 


                            <td>
                                <img src="images/england.png" title="england">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=english" />
                                <br>
                            </td>                          
                        </tr>
                        <tr>
                            <td>
                                <img src="images/greece.png" title="santorini">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=greek"  /> 
                                <br>
                            </td>


                            <td>
                                <img src="images/france.png" title="france">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=french"  /> 
                                <br>
                            </td> 


                            <td>
                                <img src="images/africa.png" title="africa">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=african"  /> 
                                <br>
                            </td>                          
                        </tr>
                        <tr>
                            <td>
                                <img src="images/atlantis.png" title="atlantis">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=seafood"  /> 
                                <br>
                            </td>


                            <td>
                                <img src="images/china.png" title="china">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=chinese"  />  
                                <br>
                            </td> 


                            <td>
                                <img src="images/west.png" title="wildwest">
                                <br>
                                <input type="radio" name="genre" value="&category_filter=steak" />
                                <br>
                            </td>                          
                        </tr>                    
                    </table>
                </div>
            </form>


            <!-- return &sort= -->
            <form name="sort">
                <div id="questionfour" class="stack">
                    <img src="images/pearedlogo.png" alt="logo" title="logo" class="mini"/>
                    <p>How would you like your options sorted?</p>
                    <table class="table">
                        <tr>
                            <td>
                                <img src="images/best.png" alt="best" title="best">
                                <br>
                                <input type="radio" name="sort" value="&sort=0"/> 
                                <br>
                            </td>


                            <td>
                                <img src="images/distance.png" alt="distance" title="distance">
                                <br>
                                <input type="radio" name="sort" value="&sort=1"/>  
                                <br>
                            </td> 


                            <td>
                                <img src="images/rating.png" alt="rating" title="rating">
                                <br>
                                <input type="radio" name="sort" value="&sort=2"/> 
                                <br>
                            </td>                          
                        </tr>
                    </table>
                </div>
            </form>


            <!-- return &radius_filter= -->
            <form name="radius">
                <div id="questionfive" class="stack">
                    <img src="images/pearedlogo.png" alt="logo" title="logo" class="mini"/>
                    <p>How many miles are you willing to drive from your entered location?</p>
                    <table class="table">
                        <tr>
                            <td>
                                <img src="images/10mi.png" title="10mi">
                                <br>
                                <input type="radio" name="radius" value="&radius_filter=8000"/>  
                                <br>
                            </td>


                            <td>
                                <img src="images/30mi.png" title="30mi">
                                <br>
                                <input type="radio" name="radius" value="&radius_filter=16000"/>   
                                <br>
                            </td> 


                            <td>
                                <img src="images/50mi.png" title="50mi">
                                <br>
                                <input type="radio" name="radius" value="&radius_filter=32000"/>
                                <br>
                            </td>                          
                        </tr>
                    </table>
                </div>
            </form>


            <!-- return &limit= --> 
            <form name="limit">
                <div id="questionsix" class="stack">
                    <img src="images/pearedlogo.png" alt="logo" title="logo" class="mini"/>
                    <p>How many options would you like?</p>
                    <table class="table">
                        <tr>
                            <td>
                                <img src="images/2.png" alt="2" title="2">
                                <br>
                                <input type="radio" name="limit" value="&limit=2"/> 
                                <br>
                            </td>


                            <td>
                                <img src="images/5.png" alt="5" title="5">
                                <br>
                                <input type="radio" name="limit" value="&limit=5"/>   
                                <br>
                            </td> 


                            <td>
                                <img src="images/10.png" alt="10" title="10">
                                <br>
                                <input type="radio" name="limit" value="&limit=10"/> 
                                <br>
                            </td>                          
                        </tr>
                    </table>
                </div>

            </form>

        </div>
    </body>

</html>
