<?php

$server="localhost";
$dbname="challenge";
$user="root";
$pass="";


try {
	
	$conn =new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);


} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}
 ?>