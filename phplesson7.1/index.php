<?php

    $host = "localhost";

    $user = "root";

    $pass = "";

    $dbname = "test9";


    try{
        $conn = new PDO("mysql:host=$host; dbname=$dbname",$user, $pass);

        //set value to be inserted
        // $username = "Donika";
        // $password = password_hash("mypassword", PASSWORD_DEFAULT);
        // $sql =  "Insert into users(username, password) values ('$username','$password')";

        //creating table
        // $sql = "CREATE TABLE users(id INT(6)not null AUTO_INCREMENT PRIMARY KEY,
        // username VARCHAR (255) NOT NULL,
        // password Varchar (255) not null )";

        //adding columns
        //$sql = "ALTER TABLE users add email varchar(255)";

        //deleting column
        $sql = "ALTER TABLE users drop column email";

        $conn->exec($sql);
    

        // $last_id = $conn->lastInsertId();
        // echo "User is created with ID: " . $last_id;

        // echo "COLUMN is created ";\
        echo "COLUMN is deleted ";
    }

    catch(Exeception $e){
    echo $e->getMessage();
    }

?>