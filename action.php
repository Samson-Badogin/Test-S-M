 <?php
 try{
	$conn = new PDO( dsn: "mysql:host=localhost; dbname=requestform", username: 'root', passwd: '');
	
	if (empty($POST['name'])) exit("Поле не заполнено");
	if (empty($POST['name'])) exit("Поле не заполнено");
	
	$query = "INSERT INTO requestform VALUES (NULL, :name, :email, :message);
	$msg = $conn->prepare($query);
	$msg_id = $conn->lastInsertId();
	$msg->execute(['name' => $_POST['name'], 'email' => $_POST['email'], 'message' => $_POST['message']]);
	
 }
 catch (PDOException $e)
 {
 	echo "error";
 }
 ?>