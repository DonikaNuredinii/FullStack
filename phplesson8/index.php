<!-- <?php 
$username = $_GET['username'];
$password = $_GET['password'];

echo $username;
echo "<br>";
echo $password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="username"> <br>

        <label for="password">password</label>
        <input type="text" id="password" name="password" placeholder="password"> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetching data</title>
    <style> 
    table,td,th{
        border:1px solid black;
        border-collapse:collapse;
    }
    td,th{
        padding:10px 20;
    }

    </style>
</head>
<body>
<?php

include_once("config.php");

$sql = "SELECT * from users";
$getUsers = $connect->prepare($sql);
$getUsers->execute();

$users = $getUsers ->fetchAll();

?>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
                foreach($users as $user){
            ?>
                    <tr>
                        <td> <?= $user['id']?> </td>
                        <td> <?= $user['name']?> </td>
                        <td> <?= $user['username']?> </td>
                        <td> <?= $user['email']?> </td>

                    </tr>

            

            <?php
                }
            ?>

        </tbody>
    </table>
    <a href = index.html>ADD USER</a>
    
</body>
</html>