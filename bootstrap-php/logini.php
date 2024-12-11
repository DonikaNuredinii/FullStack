<?php
    include_once("config.php");

    if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            if(empty($username) || empty($password)){
                echo "mbushi te gjitha fushat";
            }

            else{
                $sql = "SELECT * from users WHERE username = :username";

                $tempSql = $conn->prepare($sql);
                $tempSql->bindParam(":username", $username);
                $tempSql->execute();
            }

            if($tempSql->rowCount()>0){
                $data = $tempSql->fetch();
                if(password_verify($password,$data['password'])){
                    $_SESSION['username'] = $data['username'];
                    header("Location: dashboard.php");
                }
            else{
                echo "password incorrect";
            }
        }
            else{
                echo "user not found";
            }
    }

?>