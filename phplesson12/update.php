<?php

include_once('config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $adress = $_POST['adress'];


	$sql = "UPDATE user SET name=:name, surname=:surname, age=:age, phone_number=:phone_number WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->bindParam(':name', $name);
	$prep->bindParam(':surname', $surname);
	$prep->bindParam(':age', $age);
    $prep->bindParam(':phone_number', $phone_number);
    $prep->bindParam(':adress', $adress);
	$prep->execute();
	header("Location:dashboard.php");
}


?>
