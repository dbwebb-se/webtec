<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/header.php");



// Here is my testprogram
$num1 = 3.14;
$num2 = sqrt(2);
$num3 = 7E-10;

// echo $num1, " (", gettype($num1), ")\n";
// echo $num2, " (", gettype($num2), ")\n";
// echo $num3, " (", gettype($num3), ")\n";

// $var = null;
// var_dump($var);
// 
// $var = false;
// var_dump($var);
// 
// $var = true;
// var_dump($var);
// 
// $var = 42;
// var_dump($var);
// 
// $var = 3.14;
// var_dump($var);
// 
// $var = "Hello";
// var_dump($var);

// Print out "This is Mikael's rubber duck."
// $name = "Mikael";
// $message = "This is ${name}'s rubber duck.\n";
// echo $message;
// 
// // See the difference when using ''
// $message = 'This is ${name}\'s rubber duck.\n';
// echo $message;

// $url = "https://dbwebb.se";
// $html = <<<EOD
// <p>This is pure text, saved in a variable for 
// use later on.</p>
// 
// <p>This is a <a href="$url">url to somewhere.</a></p>
// 
// EOD; 
// 
// echo $html;


// // Show difference in length of string
// echo strlen("åäö");    // UTF-8: 6, ISO8859-1: 3
// echo mb_strlen("åäö"); // UTF-8: 3, ISO8859-1: 1


include(__DIR__ . "/footer.php");
