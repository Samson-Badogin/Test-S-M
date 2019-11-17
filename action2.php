 <?php
 
 /*TRY TO CONNECT TO DATA BASE*/
 
 $host = 'localhost';
 $db = 'requestform';
 $user = 'root';
 $pswd = '';
 $charset = 'utf8';
 $conn = "mysql:host=$host; dbname=$db; charset=$charset";
 $options = [
	PDO::ATTR_ERRMODE					=> PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE	=> PDO::FETCH_ASSOC, /*для возвращения данных по индексу*/
	PDO::ATTR_EMULATE_PREPARES		=> false,
];

$pdo = new PDO($conn, $user, $pswd, $opt);
		if($pdo == false){
     		echo 'Проблемы с соединением'; 
    		exit();
}
		else{
     		echo 'Подключение к БД успешно';
}
/*C*****O******N*****N*****E*****C*****T*****/

$name = $_POST['name'];
$email = $_POST['email']; 
$message = $_POST['message'];

 echo ($name);
 echo ($email);
 echo ($message);

//TRY TO RECORD POST DATA IN requestform db
$result = query("INSERT INTO requestform (name, email, message) 
							VALUES ('$name', '$email', '$message')");
/*$result = query("INSERT INTO requestform (name, email, message) 
							VALUES ('$_POST['name']','$_POST['email']','$_POST['message']')");*/
		//echo '$result';
		if ($result==false){
    		echo 'Произошла ошибка, пожалуйста повторите попытку.';
}
		else{
    		echo 'Данные успешно сохранены!';
}
echo 'TEST!!!!!!!!!!!!!!!!';

?>