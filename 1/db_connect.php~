<?php

 /*TRY TO CONNECT TO DATA BASE*/

         $host = 'localhost';
         $db = 'requestform';
         $user = 'root';
         $pswd = '';
         $charset = 'utf8';
         $conn = "mysql:host=$host; dbname=$db; charset=$charset";
         $options = [
                PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES      => false,
                ];

        $pdo = new PDO($conn, $user, $pswd, $opt);
                if($pdo == false){
                echo 'Проблемы с соединением';
                exit();
        }
                else{
                echo 'Подключение к БД успешно';
        }
?>
