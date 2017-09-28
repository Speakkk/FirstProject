<?php
	include ("bd.php");
	$admin = $_POST['admin'];
	$result= $db->exec("DELETE FROM users WHERE id ={$_POST["users"]}");
	if($result){
		echo 'Запись удалена';
	}
	else{
		echo 'Запись неудалена';
	}
	
?>
