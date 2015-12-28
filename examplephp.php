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
                         <li><a href="http://buddhaworks.org/examplephp.php">Php</a></li>
                        <li><a href="http://buddhaworks.org/weatherphp.php">Php Weather Scraper</a></li>
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
                    echo "<hr/>";
                    ?>

                </div>
                <div class="col-lg-4">
                    <h3>Get/post/request Variables</h3>
                    <p>if you type after examplephp.php the following "?name=guestFirst&surname=guestLast" it will appear in the array when you hit enter</p>

                    <?php
                    echo "<br/>";
                    print_r($_GET);
                    echo "<br/>";
                    ?>

                    <?php
                    if (isset($_REQUEST["submit"])) {
                        if (isset($_REQUEST["name"])) {
                            echo "Your name is " . $_REQUEST["name"];
                        } else {
                            echo "name doesn't exist";
                        }
                    } else {
                        echo "submit doesn't exist. aka Please Enter a Name";
                    }
                    ?>
                    <hr/>
                    <form>
                        <label for="name">Name</label>
                        <input name="name" type="text" />
                        <input type="submit" name="submit" value="Submit Your Name" />
                    </form>
                    <hr/>
                    <?php
                    echo "<br/>";
                    if (isset($_REQUEST["submit2"])) {
                        if (isset($_REQUEST["name2"])) {
                            echo "Your name is " . $_REQUEST["name2"];
                        } else {
                            echo "name doesn't exist";
                        }
                    } else {
                        echo "submit doesn't exist. aka Please Enter a Name";
                    }

                    echo "<hr/>";
                    ?>
                    <form method="post">
                        <label for="name2">Name2</label>
                        <input name="name2" type="text" />
                        <input type="submit" name="submit2" value="Submit Your Name2" />
                    </form>
                    <hr/>
                    <h3></h3>
                    <?php
                    $names = array("Fred", "Rob", "Tom");
                    $knowYou = 0;
                    echo "<br/>";
                    if (isset($_POST["submit3"])) {
                        if (isset($_POST["name3"])) {
                            foreach ($names as $name3) {
                                if ($_POST["name3"] == $name3) {
                                    echo "I know you. Your Name is " . $name3;
                                    $knowYou = 1;
                                }
                            }
                            if ($knowYou == 0)
                                echo "Sorry, I don't know you.";
                        }
                    } else {
                        echo "Please Enter a Name";
                    }

                    echo "<hr/>";
                    ?>
                    <form method="post">
                        <label for="name3">Name3</label>
                        <input name="name3" type="text" />
                        <input type="submit" name="submit3" value="Submit Your Name3" />
                    </form>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" id="emailForm">
                    <?php
                    $emailResult = "";
                    $error = " ";
                    if (isset($_POST["submitEmail"])) {

                        if (!$_POST["firstName"]) {
                            $error = "<br/> Please Enter your  First Name";
                        }
                        if (!$_POST["lastName"]) {
                            $error.="<br/> Please Enter your  Last Name";
                        }
                        if (!$_POST["emailTo"]) {
                            $error = $error . "<br/> Please Enter your emailTo";
                        }
                        if (!$_POST["emailFrom"]) {
                            $error = $error . "<br/> Please Enter your emailFrom";
                        }
                        if (!$_POST["emailHeader"]) {
                            $error = $error . "<br/> Please Enter emailHeader";
                        }
                        if (!$_POST["emailSubject"]) {
                            $error = $error . "<br/> Please Enter emailSubject";
                        }
                        if (!$_POST["emailContent"]) {
                            $error = $error . "<br/> Please Enter emailContent";
                        }
                        if ($_POST["emailTo"] != "" AND ! filter_var($_POST["emailTo"], FILTER_VALIDATE_EMAIL)) {
                            $error = $error . "<br/> Please Enter a Valid emailTo";
                        }
                        if ($_POST["emailFrom"] != "" AND ! filter_var($_POST["emailFrom"], FILTER_VALIDATE_EMAIL)) {
                            $error = $error . "<br/> Please Enter a Valid emailFrom";
                        }

                        if ($error != " ") {
                            $emailResult = '<div class="alert alert-danger"><strong>Attention! There are errors in your form: </strong>' . $error . '</div>';
                        } else {

                            if (mail($_POST["emailTo"], $_POST["emailSubject"], "Name:" . $_POST['firstName'] . " " . $_POST['firstName'] . " Email:" . $_POST['emailFrom'] . " Comment: " . $_POST['emailContent'] . " emailHeader: " . $_POST['emailHeader'])) {
                                $emailResult = '<div class="alert alert-success">Email Submitted</div>';
                            } else {
                                $emailResult = '<div class="alert alert-danger">Email NOT Submitted</div>';
                            }
                        }
                    }
                    ?>
                    <h3>Email Form</h3>
                    <h3>
                        <?php echo $emailResult; ?>
                    </h3>

                    <form method="post" style="padding-bottom: 15px">
                        <div class="form-group">
                            <label for="firstName">First Name: </label>
                            <input name="firstName" type="text" class="form-control" placeholder="FirstName" value="<?php echo$_POST['firstName'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name: </label>
                            <input name="lastName" type="text" class="form-control" placeholder="lastName" value="<?php echo$_POST['lastName'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="emailTo">emailTo: </label>
                            <input name="emailTo" type="email" class="form-control" placeholder="emailTo" required value="<?php echo$_POST['emailTo'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="emailFrom">emailFrom: </label>
                            <input name="emailFrom" type="email" class="form-control" placeholder="emailFrom" required value="<?php echo$_POST['emailFrom'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="emailHeader">emailHeader: </label>
                            <input name="emailHeader" type="text" class="form-control" placeholder="emailHeader" value="<?php echo$_POST['emailHeader'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="emailSubject">emailSubject: </label>
                            <input name="emailSubject" type="text" class="form-control" placeholder="emailSubject" value="<?php echo$_POST['emailSubject'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="emailContent">emailContent: </label>
                            <textarea name="emailContent" type="text" class="form-control" placeholder="emailContent" value="<?php echo$_POST['emailContent'];?>"></textarea>
                        </div>
                        <input type="submit" name="submitEmail" style="margin-bottom: 15px;" value="Send message!" class="btn btn-primary pull-right"/>

                    </form>


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
