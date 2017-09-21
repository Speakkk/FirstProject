<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include ("bd.php");
	
	if ( !empty($_REQUEST['password']) and !empty($_REQUEST['admin']) ) {
		$admin = $_REQUEST['admin'];
		$password = md5($_REQUEST['password']);
		$query = 'SELECT * FROM users WHERE admin="'.$admin.'" AND password="'.$password.'"';
		$result = mysql_query($query); //ответ базы запишем в переменную $result
		$user = mysql_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP
		if (!empty($user)) {
		$_SESSION['auth'] = true; 
		$_SESSION['id'] = $user['id']; 
		$_SESSION['admin'] = $user['admin']; 
		header('Location: /profile.php?user='.$user['admin']);
		} 
	}else{
	}
	
?>