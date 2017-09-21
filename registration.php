	<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="js/ui/jquery-ui.structure.css">
	<link rel="stylesheet" href="js/ui/jquery-ui.theme.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<title> Добавить пользователя </title>
	</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-2 col-md-8 col-sm-6"></div>
		<div class="col-lg-10 col-md-4 col-sm-6"><form enctype="multipart/form-data" method=post action=verification.php>
		<div class="reg">
			Логин:<br>
			<input type="text" name="admin" class="form-control"><br>
		</div>
		<div class="reg">
			Пароль:<br>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="reg">
			ФИО:<br>
			<input type="text" name="fio" class="form-control" >
		</div>
		<div class="reg">
			Возраст:<br>
			<div id="slider"></div>
			<div id="slider_value"></div>
		</div>
		<div class="reg">
			Фотография:<br>
			<input type="file" name="photo">
		</div>
		<div class="reg">
			Дата:<br>
			<?php
				echo date("d-m-Y H:i:s");
			?>	
		</div>
		<input type="hidden" name="age" id="age_value">
		<input type="submit" name="submit" value="Зарегистрировать" class="btn btn-success">
	</form>
		</div>
	</div>
</div>
</body>
<!--<script src="http://code.jquery.com/jquery-1.7.js"></script>
<script src="/js/jquery_slider.js"></script> -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/js/slider.js"></script>
</html>