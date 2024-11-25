<?php

//funksioni
// phpinfo();

// $x = "Hello";
// print_r( $x );

$x = 5;
echo gettype( $x ) ."<br>";

$y = 10.5;
echo gettype( $y ) ."<br>";

$z = "hello";
echo gettype( $z ) ."<br>"; 

function displayVersion(){
    echo "this is php version " .phpversion();
    echo "\n";
}
displayVersion()


?>