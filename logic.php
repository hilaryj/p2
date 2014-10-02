<?php

# sets the default number of words for the generator; due to the nature of the items in the array it will get kind of crazy if it's over 3
#$numberofwords = 2;

# was getting a notice about undefined index on page load, so going to use isset to check if the numberofwords is not set
if(!isset($_POST['numberofwords']))
{
	$_POST['numberofwords'] = NULL;	
}

$requestedwords = $_POST["numberofwords"]; # how many terms does the user want in their password
$wordchoicesarray = array("wakuwaku","dokidoki","pikapika","pakupaku","barabara","nikoniko","kirakira","girigiri"); # the list of words
$password = array(); # password is initially empty

# in this for loop, it iterates through generating a random number 0 through 7, then pushes that index of the word choices array to the variable password...until it reaches the number of requested words
for ($i=1;$i<=$requestedwords;$i++){
    $randomnumber = rand(0,7);
    array_push($password,$wordchoicesarray[$randomnumber]);
}

if(isset($_POST["addnumber"])) {
    $passwordnumber = rand(0,9); #pick a random number between 0 and 9, the single digits...
}
else $passwordnumber = ''; #otherwise, nothing

if(isset($_POST["addsymbol"])) {
    $symbolarray = array('#','$','&','%');
    shuffle($symbolarray);
    $passwordsymbol = $symbolarray[0]; #if they checked to add a symbol, shuffle the symbols and return whatever is in the 0th position...
}
else $passwordsymbol = ''; #otherwise, nothing