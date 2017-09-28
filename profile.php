<?php
session_start();
include('bd.php');
if(!empty($_SESSION['admin'])){
	$user = $_SESSION['admin'];
}
else
{
	header('Location: /'); // если на страницу попадет незарегистриованный пользователь
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<title> Мой профиль</title>
	</head>
	<body>
		<h1>Мой профиль (<b><?=$user?>)</h1>
	<div id="login">
		<div class="but_profile">
		<form action="registration.php" method="post">
		<input type="submit" name="add_user" value="Добавить пользователя" class="btn btn-success" style="width:175px">
		</form>
		</div>
		<div class="but_profile">
		<a href="deleteuser_form.php" class="btn btn-success">Удалить пользователя</a>
		</div>
	</div>
		</form>
</body>
</html>