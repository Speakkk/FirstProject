<?php
	include ("bd.php");
	$admin = $_POST['admin'];
	$result= mysql_query("DELETE FROM users WHERE id ={$_POST["users"]}");
	if($result){
		echo 'Запись удалена';
	}
	else{
		echo 'Запись неудалена';
	}
	
?>
