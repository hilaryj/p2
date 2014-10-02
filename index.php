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
                    <label for="wordcount">Number of terms:</label>
                    <input type="text" name="numberofwords">
                    <p>I recommend 2 or 3 terms; any more than that and it starts to get crazy!</p>
                    <p>The maximum number of terms is 6</p>
                    <!-- still have to add this functionality -->
                    <br>
                    
                    <!-- add a symbol? number? -->
                    <label name="addsymbol">Add a symbol? </label>&nbsp;&nbsp;
                    <input type="checkbox" name="addsymbol" value="Symbol"><br>
                    
                    <label name="addnumber">Add a number? </label>&nbsp;&nbsp;
                    <input type="checkbox" name="addnumber" value="Number"><br><br>
                    
                    <input type="submit" value="Generate Password" class="btn btn-default">
                </form>
                <p>Your password is...</p> <!-- probably want this hidden at first, until the password is generated -->
                <!-- space to output the password -->
                <p class="output"><?php echo join("",$password); ?><?php echo $passwordsymbol; ?><?php echo $passwordnumber; ?></p>
                
            </div>
            <div class="col-md-8 about">
            <p>XKCD is a web comic created by Randal Monroe in 2005.  He describes the comic as a "stick-figure strip featuring humour about technology, science, mathematics and relationship."</p>
            <p>In August 2011, Monroe posted <a href="http://xkcd.com/936/" target="_blank">"Password Strength"</a>,  a proposal to create passwords that are easy for people to remember and hard for computers to guess, noticing the problem that increasingly computers are guessing the passwords that we tried SO hard to make complicated, and consequently forgot them due to their complexity. </p>
                <p>Citing the example of a password like 'Tr0ub4dor&amp;3' (how is anyone supposed to remember that?', he proposed using four random common words -- e.g. correcthorsebatterystaple. </p>
                <hr>
                <p>I made a password generator using Japanese sound-effect words, a.k.a. <i>onomatopoeia</i>. </p>
                <p>For people familiar with Pokemon, you may recognize 'pikapika' as the sound Pikachu makes when he's energized; in fact, 'pikapika' means 'to glitter or sparkle' in Japanese. </p>
                <p>How about 'dokidoki'? ... It's the sound of a heart beating. </p>
                <p>I thought Japanese sound effect words would be fun to use in passwords, so here you are! Please feel free to give it a try. </p>
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