<html>
<head>
<title> Удаление пользователей </title>
</head>
<body>
<h1>Удаление пользователей</h1>
<form action="deleteuser.php" method="POST">
	<input type="submit" name="delete_user" value="Удалить пользователя">
	<select name="users">
	<?php
	include ("bd.php");
$result =  mysql_query ("SELECT * FROM users") or die(mysql_error());
while ($row = mysql_fetch_array($result)){

echo "<option value='".$row['id']."'>".$row['admin']."</option>";
}

 
?>
	</select>
</form>
</body>
</html>