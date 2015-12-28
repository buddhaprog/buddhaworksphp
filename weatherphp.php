<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Php</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="css/buddhaworksweatherphp.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/whitetest.jpg">
    </head>
    <body>
        <div class="container-fluid wideMe">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="http://buddhaworks.org/buddhaworks/homepage" class="navbar-brand navbrand1">Buddhaworks</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bootExampleNav">
                        <ul class="nav navbar-nav">
                            <li><a href="http://buddhaworks.org/buddhaworks/resume">Resume</a></li>
                            <li><a href="http://buddhaworks.org/examplephp.php">Php</a></li>
                            <li><a href="http://buddhaworks.org/weatherphp.php">Php Weather Scraper</a></li>
                            <li><a href="http://www.oldtimestrongman.com/strength-articles/iron-henry-rollins">Link 3</a></li>
                            <li><a href="http://rosstraining.com/blog/2009/12/04/iron-and-the-soul-by-henry-rollins/">Link 4</a></li>
                        </ul>
                        <div class="collapse navbar-collapse pull-right">

                        </div>
                        <!--                        <div class="collapse navbar-collapse pull-right scrollSpyNav">
                                                    <ul class="nav navbar-nav">  
                        
                                                        <li><a href="#firstContentDiv">Top</a></li>
                                                        <li><a href="#secondContentDiv">About</a></li>
                                                        <li><a href="#thirdContentDiv">Download</a></li>
                                                        <li><a href="${pageContext.request.contextPath}/bootStrapPageExample1">BootStrap Example 1</a></li>
                                                    </ul>
                                                </div>-->
                    </div>
                </div>      
            </div>

            <div class="container-fluid marginTop" id="contentContainer1">

                <div class="contentDiv2 container-fluid" id="firstContentDiv">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3" id="contentDiv2Row1">
                            <h1 class="marginTop whiteFont" style="font-weight: bolder;">Weather App</h1>
                            <p class="lead marginTop">Bootstrap and php <button id="changeImage" class="btn btn-sm btn-primary">Change the Background</button></p>
                            <p class="overlayText marginTop boldThis">This app, retrieves weather information based on the city provided in the input via scraping from the website: <a href="http://www.weather-forecast.com" target="_blank">weather-forecast.com</a></p>
                            <p class="boldThis marginTop">Enter your city below to get a weather forecast</p>
                            <form id="bootform1">
                                <div class="input-group input-group-sm col-md-4 col-md-offset-4">
                                    <span class="input-group-addon glyphicon-cloud"></span>
                                    <input name="city" type="text" class="form-control" id="city" placeholder="New York, Paris, San Franciso"/>

                                </div>
                                <input id="getWeather" type="submit" class="btn btn-primary btn-lg marginTop whiteFont" value="Get Weather">
                            </form>
                            <div id="weatherResult" class="overlayText marginTop boldThis whiteFont">One Moment....</div>
                        </div>

                    </div>

                </div>

            </div>


            <!-- Site footer -->
            <div class="footer">
                <div class="container">
                    <div class="pull-right">
                        <p>&copy; 2015 Buddhaworks.org</p>
                    </div>
                </div>

            </div>
        </div>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/moment.js"></script>
        <script src="js/buddhaworksphp.js"></script>
        <script>
            $('#getWeather').click(function (event) {
                event.preventDefault();
                if ($("#city").val() != "") {
                    $('#weatherResult').slideToggle();
                   
                    $.get("scraperphp.php?city=" + $("#city").val(), function (data) {
                        console.log(data);
                        if (data!= ""){
                        document.getElementById("weatherResult").innerHTML = (data);
                    }else{
                        document.getElementById("weatherResult").innerHTML = ("Sorry City Not Found");
                    }
                    });
                } else {
                    alert("please enter a city");
                }
            });
            $('#changeImage').click(function () {
                console.log(pickimg());
                var backimage = pickimg();
                document.getElementById(
                        "firstContentDiv").style.backgroundImage = ("url("+backimage+")");

            });

            function pickimg() {
                var imagenumber = 8;
                var randomnumber = Math.random();
                var rand1 = Math.round((imagenumber - 1) * randomnumber) + 1;
                images = new Array;
                images[1] = "img/5053029888_314dfbd578_b.jpg";
                images[2] = "img/387019269_068fd16670_b.jpg";
                images[3] = "img/12375492943_ec40c86191_k.jpg";
                images[4] = "img/3410783929_051d93bc86_b.jpg";
                images[5] = "img/4435815008_4eaea25689_b.jpg";
                images[6] = "img/5053029888_314dfbd578_b.jpg";
                images[7] = "img/9713275255_908edb2e8f_k.jpg";
                images[8] = "img/templebellshapetreyratcliff.jpg";
                var image = images[rand1];
                return image;
            }


        </script>
    </body>
</html>
