<?php

//variablat
$name = "Donika";
echo "I am $name <br>";

//arithmetic
$x = 50;
$y = 30;
echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x / $y . "<br>";
echo $x * $y . "<br>";


$a= "Ariana";
$b = "Rexhepi";
$c = $a.$b . "<br>";
echo "$c \n";

//me shtu edhe diqka ne nje fjal ekzistuse .=
$message = "Hello ";
$message .= "World";
echo $message. "<br>";

//string length*(numron edhe space) and word count
$the_string = "Donika Nuredini Test";
echo strlen($the_string)."<br>";
echo str_word_count($the_string)."<br>";
echo str_replace("Test", " Ma e mira", $the_string)."<br>";

//e kthen fjalen reverse
echo strrev($the_string);
?>