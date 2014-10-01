<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project 2 - XKCD-Style Password Generator</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900|Lato:400,700' rel='stylesheet' type='text/css'>
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
                <h2>... in the style of XKCD's Password Generator</h2>
            </div>
        </div>
        <div class="row maincontent">
            <div class="col-md-4">
                <form method='POST' action='index.php'>
                  <!-- input - how many words to use in the password -->
                    <label for="wordcount">Number of words:</label>
                    <input type="text" name="numberofwords">
                    <p>I recommend 2 or 3 terms; any more than that and it starts to get crazy!</p>
                    <p>The maximum number of terms is 6</p>
                    <br>
                    <input type="submit" value="Generate Password" class="btn btn-default">
                    <!-- still need to add whether to include symbol or number -->
                </form>
                <p>Your password is...</p> <!-- probably want this hidden at first, until the password is generated -->
                <!-- space to output the password -->
                <p class="output"><?php echo join("",$password); ?></p>
            </div>
            <div class="col-md-8 about">
            <p>XKCD is a webcomic...</p>
            <a href="http://xkcd.com/936/"><img src="http://imgs.xkcd.com/comics/password_strength.png"/></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>&copy; <?php echo date("Y") ?> Hilary Johnson</p>
            </div>
        </div>
    </div> <!-- end container -->
  </body>
</html>