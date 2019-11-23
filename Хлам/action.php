<?php
$connection = mysqli_connect('localhost', 'root', '');

if($connection == false){
     echo 'Проблемы с соединением'; 
    exit();
} 
else{
     echo 'Подключение к БД успешно';
}

$db=mysqli_select_db($connection, "requestform");
mysqli_set_charset("utf8");
if (!$connection || !$db){
	exit(mysqli_error());
	echo 'Проблемы с определением/выбором БД';
}


$name = $_POST['name'];
$email = $_POST['email']; 
$message = $_POST['message'];

 echo ($name);
 echo ($email);
 echo ($message);


$result = mysqli_query("INSERT INTO `requestform`(`name`, `email`, `message`) VALUES ('$name','$email','$message')");
if ($result){
    echo "Данные успешно сохранены!";
}
else{
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}




?> 