<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DWA15 Project 2 - XKCD-Style Password Generator</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900%7CLato:400,700' rel='stylesheet' type='text/css' />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php require 'logic.php'; ?>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 sitetitle">
                <h1>Japanese Onomatopoeia Password Generator</h1>
                <h2>in the style of XKCD's Password Generator</h2>
            </div>
        </div>
        <div class="row maincontent">
            <div class="col-md-4">
                <div class="grouping">
                    <h3>Password Generator</h3>
                        <form method='POST' action='index.php'>
                            <!-- User input: how many terms to use -->
                            <label for="numberofwords">Number of terms:</label>
                            <input type="number" name="numberofwords" id="numberofwords" max="3" min="1">
                            <p><i>Enter 1, 2, or 3; any more and the password becomes unwieldy.</i></p>
                            <br>
                            <!-- User input: add a symbol or number -->
                            <label for="addsymbol">Add a symbol? </label>&nbsp;&nbsp;
                            <input type="checkbox" name="addsymbol" value="addsymbol" id="addsymbol"><br>
                            <label for="addnumber">Add a number? </label>&nbsp;&nbsp;
                            <input type="checkbox" name="addnumber" value="addnumber" id="addnumber"><br><br>
                            <input type="submit" value="Generate Password" class="btn btn-default">
                        </form><br> 
                    <p>Your password is...</p>
                    <!-- Output: password -->
                    <p class="output"><?php echo join("",$password); ?><?php echo $passwordsymbol; ?><?php echo $passwordnumber; ?></p>
                </div>
            </div>
            <div class="col-md-8">
                <p>XKCD is a web comic created by Randall Munroe in 2005.  He describes the comic as a "stick-figure strip featuring humour about technology, science, mathematics and relationship." </p>
                <p>In August 2011, Munroe posted the comic, <a href="http://xkcd.com/936/" target="_blank">"Password Strength"</a>, about how in trying to create passwords that are difficult to hack, we end up creating easily-hacked passwords that are hard to remember. </p>
                <p>Citing the example of a password like 'Tr0ub4dor&amp;3' (how is anyone supposed to remember that?), he proposed making passwords out of dictionary words -- e.g. <strong>correcthorsebatterystaple. </strong></p>
                <hr class="divider">
                <p>I made a password generator using Japanese sound-effect words, a.k.a. <i>onomatopoeia</i>. </p>
                <p>You may recognize 'pikapika' as the sound Pikachu makes when he's energized. 'Pikapika' means 'to glitter or sparkle' in Japanese. </p>
                <p>How about 'dokidoki'? It's the sound of a heart beating. </p>
                <p>Use the form on the left to create your own password! </p>
            </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; <?php echo date("Y") ?> Hilary Johnson</p>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
  </body>
</html>