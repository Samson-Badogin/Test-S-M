<?php
	/*$host = 'localhost';
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
              else {
                echo 'Подключение к БД успешно';
       			}*/
require_once("db_connect.php");
	
	$name = $_POST['name'];
	echo ($name);
 			$data = [
 				   'name' => $name,
   		];
$result = "INSERT INTO Test1 (name) VALUES (:name)";
$stmt= $pdo->prepare($result);
$stmt->execute($data);
	
?>