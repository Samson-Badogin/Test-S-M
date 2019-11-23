 
<?php

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
    // сортировка по дате ORDER BY dt DESC
    $query = $pdo->prepare("SELECT * FROM `questions` WHERE is_moderate='0' ORDER BY dt DESC");
    $query->execute();
    // fetchAll() вывод массива в виде таблицы
    $comments = $query->fetchAll(PDO::FETCH_ASSOC); //надо ли его тут, если он вверху...

    echo json_encode($comments);

?>