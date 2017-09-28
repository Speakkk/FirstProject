<?php
session_start();
$admin = $_POST['admin']; 
 if ($admin == '') { 

    unset($admin);
 }
     
if (isset($_POST['password'])) { 
    $password=$_POST['password']; if ($password =='') 
    { 
    unset($password);
    } 
}
if (empty($admin) or empty($password)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $admin = stripslashes($admin);
    $admin = htmlspecialchars($admin);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $admin = trim($admin);
    $password = trim($password);

    include ("bd.php");
    $query = $db->query("SELECT * FROM users WHERE admin='$admin'");
	$myrow = $query->fetch();
    if (empty($myrow['password']))
    {
        exit ("Извините, введённый вами логин или пароль неверный.");
    }
    else
    {
    if (password_verify($password, $myrow['password'])) { 
        $_SESSION['admin']=$myrow['admin']; 
        $_SESSION['id']=$myrow['id'];
        header('Location: /profile.php?user='.$myrow['admin']);

    }
    else 
    {
    exit ("Извините, введённый вами логин или пароль неверный.");
    }   
    }
       
?>



