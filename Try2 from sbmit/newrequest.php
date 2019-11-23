 
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
    if(count($_REQUEST) > 0){
        $name = trim($_REQUEST['name']);
        $text = trim($_REQUEST['text']);

        $name = htmlspecialchars($name);
        $text = htmlspecialchars($text);

        if ($name != '' && $text != '' ) {
            $query = $pdo->prepare("INSERT INTO `questions` SET name=:name, text=:text");
            $params = ['name' => $name, 'text' => $text];

            $query->execute($params);

            http_response_code(201); // 201 -- создано
        }

    }
    ?>