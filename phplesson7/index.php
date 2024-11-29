<?php

    $host = "localhost";

    $user = "root";

    $pass = "";

    $dbname = "school";


    // try{
    //     $conn = new PDO("mysql:host=$host; dbname=$dbname",$user, $pass);

    //     $sql = "CREATE DATABASE test1";

    //     $conn->exec($sql);
    //     echo "Databaza jone test u krijua me sukses";
    // }

    // catch(Exeception $e){
    // echo "Lidhja jone ne db nuk u be si duhet";
    // }


  
    try{
        $conn = new PDO("mysql:host=$host; dbname=$dbname",$user, $pass);

         $sql = "CREATE TABLE classes (id INT(7) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255), capacity INT(6))";
          

         $conn->exec($sql);

         echo "tabela jone classes u krijua me sukses";

    }
    catch(Exeception $e){
         echo "Lidhja jone ne db nuk u be si duhet";
        }


?>
