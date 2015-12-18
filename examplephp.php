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
        <link href="css/buddhaworksphp.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/whitetest.jpg">
    </head>
    <body>
        <div class="container">

            <div class="masthead">
                <!--<h3 class="text-muted">PHP</h3>-->
                <nav>
                    <ul class="nav nav-justified">
                        <li class="active"><a href="http://buddhaworks.org/buddhaworks/homepage">Buddhaworks</a></li>
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                    </ul>
                </nav>
            </div>

            <div class="jumbotron">
                <h1>Basic PHP intro</h1>
                <p class="lead">Here is just some basic php.</p>
                <!--<p><a class="btn btn-lg btn-success" href="#" role="button">Button</a></p>-->
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <h2></h2>
                    <?php
                    echo "<p>Hello World!</p>";
                    echo "<hr/>";

                    $test = "I'm a variable";
                    echo $test;
                    echo "<hr/>";

                    $test2 = "I\"m a variable (escape character used)";
                    echo "<br/>";
                    echo $test2;
                    echo "<br/>";
                    echo $test . $test2;
                    echo "<hr/>";
                    ?>

                </div>
                <div class="col-lg-4">
                    <h2></h2>
                    <?php
                    $number = 75;
                    echo "<br/>";
                    echo $number;
                    echo "<br/>";
                    echo $number / 3;
                    echo "<br/>";
                    echo $number + 21;
                    echo "<br/>";
                    echo $number . $number;
                    echo "<br/>";
                    if (($number % 2) == 1) {
                        echo "$number is odd.";
                    }
                    if (($number % 2) == 0) {
                        echo "$number is even.";
                    }
                    echo "<br/>";
                    echo (5 % 3) . "\n";           // prints 2
                    echo (5 % -3) . "\n";          // prints 2
                    echo (-5 % 3) . "\n";          // prints -2
                    echo (-5 % -3) . "\n";         // prints -2

                    echo "<hr/>";
                    ?>
                </div>
                <div class="col-lg-4">
                    <h2></h2>
                    <?php
                    $name = "Rob";
                    echo "My name is $name";
                    echo "<br/>";
                    echo "My name is " . $name;

                    echo "<hr/>";
                    $a = "name";
                    echo $$a;
                    echo "<hr/>";
                    ?>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-lg-4">
                    <h3>Array</h3>
                    <?php
                    $myArray = array("pizza", "chocolate", "coffee");
                    print_r($myArray);
                    echo "<br/>";
                    echo $myArray[2];
                    echo "<br/>";
                    $anotherArray[0] = "hamburger";
                    $anotherArray[1] = "banger";
                    $anotherArray[2] = "eggs";
                    print_r($anotherArray);
                    echo "<br/>";
                    $thirdArray = array(
                        "france" => "French",
                        "USA" => "English",
                        "Germany" => "german"
                    );
                    print_r($thirdArray);

                    echo "<br/>";
                    $anotherArray[] = "salad";
                    print_r($anotherArray);
                    echo "<br/>";
                    unset($thirdArray["Germany"]);
                    print_r($thirdArray);
                    echo "<br/>";
                    $name = "Rob";
                    echo $name;
                    unset($name);
                    echo $name;
                    echo "<br/>";
                    echo "<hr/>";
                    ?>

                </div>
                <div class="col-lg-4">
                    <h3>If Statements</h3>
                    <?php
                    $number1 = 1;
                    $otherNumber = 2;
                    $thirdNumber = 2;
                    if ($number1 == 1) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                    echo "<br/>";
                    if ($number == $otherNumber) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                    echo "<br/>";
                    if ($number != $otherNumber) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                    echo "<br/>";
                    if (!($number == $otherNumber)) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                    echo "<br/>";
                    if ($number == $otherNumber AND $otherNumber == $thirdNumber) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                    echo "<br/>";
                    if ($number == $otherNumber OR $otherNumber == $thirdNumber) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                    echo "<hr/>";
                    ?>

                </div>
                <div class="col-lg-4">
                    <h3>For/ForEach</h3>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo $i . "\n";
                    }
                    echo "<br/>";
                    for ($i = 1; $i <= 10; $i = $i + 2) {
                        echo $i . "\n";
                    }
                    echo "<br/>";
                    for ($i = 10; $i >= 0; $i--) {
                        echo $i . "\n";
                    }
                    echo "<br/>";
                    $arrayAnimals = array("cat", "dog", "turtle");
                    print_r($arrayAnimals);

                    echo "<br/>";
                    foreach ($arrayAnimals as $key => $value) {
                        echo "Key: $key Value: $value <br/>";
                    }
                    echo "<br/>";

                    echo "<br/>";
                    echo "<hr/>";
                    ?>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <h3>While</h3>
                    <?php
                    $i = 1;
                    while ($i < 20) {
                        echo$i;
                        $i++;
                    }
                    echo "<br/>";
                    $arrayFruit = ["apple", "grape", "banana"];
                    $j = 0;
                    while ($arrayFruit[$j]) {
                        echo $arrayFruit[$j] . "\n";
                        $j++;
                        if ($j == 3) {

                            break;
                        }
                    }
                    echo "<br/>";
                    $arrayFruit2 = ["apple", "grape", "banana"];
                    $b = 0;
                    while ($arrayFruit2[$b]) {
                        echo "Key: $b Value: $arrayFruit2[$b]" . "<br/>";
                        $b++;
                        if ($b == 3) {

                            break;
                        }
                    }

                    echo "<hr/>";
                    ?>

                </div>
                <div class="col-lg-4">
                    <h3>email's</h3>
                    <?php
                    echo "<br/>";
                    $emailTo = "!@#!@#!@yellow.com";
                    $subject = "I hope this worked";
                    $body = "nice";
                    $headers = "From: !@#!@#!@#@yahoo.com";
                    if (mail($emailTo, $subject, $body, $headers)) {
                        echo "mail sent successfully";
                    } else {
                        echo "mail not sent";
                    }
                    echo "<br/>";

                    echo "<br/>";

                    echo "<br/>";
                    echo "<hr/>";
                    ?>

                </div>
                <div class="col-lg-4">
                    <h3></h3>
                    <?php
                    echo "<br/>";

                    echo "<br/>";

                    echo "<br/>";

                    echo "<br/>";
                    echo "<hr/>";
                    ?>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <h3></h3>
                    <?php
                    echo "<br/>";

                    echo "<br/>";

                    echo "<br/>";

                    echo "<br/>";
                    echo "<hr/>";
                    ?>

                </div>
                <div class="col-lg-4">
                    <h3></h3>
                    <?php
                    echo "<br/>";

                    echo "<br/>";

                    echo "<br/>";

                    echo "<br/>";
                    echo "<hr/>";
                    ?>

                </div>
                <div class="col-lg-4">
                    <h3></h3>
                    <?php
                    echo "<br/>";

                    echo "<br/>";

                    echo "<br/>";

                    echo "<br/>";
                    echo "<hr/>";
                    ?>

                </div>
            </div>
            <!-- Site footer -->
            <footer class="footer">
                <p class="pull-right">&copy; 2015 Buddhaworks.org</p>

            </footer>


            <script src="js/jquery-2.1.4.min.js"></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="js/moment.js"></script>
    </body>
</html>
