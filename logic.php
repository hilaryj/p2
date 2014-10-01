<?php
# was getting a notice about undefined index on page load, so going to use isset to check if the numberofwords is not set
if(!isset($_POST['numberofwords']))
{
	$_POST['numberofwords'] = NULL;
	
}
# sets the default number of words for the generator; due to the nature of the items in the array it will get kind of crazy if it's over 3...hmm
$numberofwords = 2;

# the list of words that can be used to make the password; indexed 0-7
$wordchoicesarray = array("wakuwaku","dokidoki","pikapika","pakupaku","barabara","nikoniko","kirakira","girigiri");

# how many terms does the user want in their password
$requestedwords = $_POST["numberofwords"];
    
# password is initially empty
$password = array();

# in this for loop, it iterates through generating a random number 0 through 7, the pushes that index of the word choices array to the variable password...until it reaches the number of requested words
for ($i=1;$i<=$requestedwords;$i++){
    $randomnumber = rand(0,7);
    array_push($password,$wordchoicesarray[$randomnumber]);
}