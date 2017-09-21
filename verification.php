<?php
	include_once("bd.php");
		$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/img/';
		echo $uploadfile = $uploaddir . basename($_FILES['photo']['name']);

		echo '<pre>';
		if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
			echo "Файл корректен и был успешно загружен.\n";
		} else {
			echo "Возможная атака с помощью файловой загрузки!\n";
		}

		echo 'Некоторая отладочная информация:';
		print_r($_FILES);

		print "</pre>";


		if ($_POST) 
		{
			
			$admin = trim($_POST['admin']);
			$password = md5(trim($_POST['password']));
			$fio = trim($_POST['fio']);
			$age =($_POST['age']);
			$photo = "/img/". basename($_FILES['photo']['name']);
			$date = date("Y-m-d H:i:s");
			$result = mysql_query("SELECT id FROM users WHERE admin='$admin'",$db);
			if($myrow = mysql_fetch_array($result)){
				
			}
		}
		if (!empty($myrow["id"])) {
		exit ("Извините, введённый вами логин уже зарегистрирован, Введите другой логин.");
		}
		echo $query = "INSERT INTO users (admin,password,fio,age,photo,date) Values ('$admin','$password', '$fio', '$age', '$photo','$date')";
		$sql = mysql_query($query, $db);
			if (!$sql) {echo "Запрос не прошел. Попробуйте еще раз.";}
			if ($sql)
			{
			exit ('<div align="center"><br/><br/><br/><h3>
	  Вы успешно зарегистрированы на сайте! Заполните форму входа и войдите</h3></div>');
			}
			
			
			



?>