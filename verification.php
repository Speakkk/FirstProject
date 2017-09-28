<?php
include_once("bd.php");
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/img/';
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);
	if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
		}
$admin = trim($_POST['admin']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$fio = trim($_POST['fio']);
$age =($_POST['age']);
$photo = "/img/". basename($_FILES['photo']['name']);
$date = date("Y-m-d H:i:s");
$query = $db->query("SELECT id FROM users WHERE admin='$admin'");
$myrow = $query->fetch(PDO::FETCH_BOTH);
if (!empty($myrow["id"])) {
	exit ("Извините, введённый вами логин уже зарегистрирован, Введите другой логин.");
}
$sql = "INSERT INTO users (admin,password,fio,age,photo,date) Values ('$admin','$password', '$fio', '$age', '$photo','$date')";
$q = $db->query($sql);
if (!$sql) {
	echo "Запрос не прошел. Попробуйте еще раз.";
}
if ($sql) {
	exit ('<div align="center"><br/><br/><br/><h3>
	Вы успешно зарегистрированы на сайте! Заполните форму входа и войдите</h3></div>');
			}
			
			
			
			



?>