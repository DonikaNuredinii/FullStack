<?php 

include_once("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id=:id";

$getUser = $conn->prepare($sql);

$getUser->bindParam(':id', $id);

$getUser->execute();

header('Location:dashboard.php');

	
?>
