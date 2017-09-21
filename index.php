<?php 
include ("bd.php");
?>
<html>
<head>
<title> Главная страница </title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css?v=1">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.js"></script>
</head>
<body>
	<div id="login">
		<div id="autoform">
			<form action=authorize.php method=post> 
	Логин:<br>
	<input type="text" name="admin"><br>
	Пароль:<br>
	<input type="password" name="password"><br>
	<input type="submit" name="sumbit" value="Войти" class="btn btn-success">
			</form>
		</div>
	</div>
</body>
</html>