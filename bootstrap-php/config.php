<?php

session_start();
$server="localhost";
$user="root";
$dbname="test1";
$pass="";

try {
	$conn =new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
} catch (PDOException $e) {
	echo "nuk u lidh db";
}
 ?>