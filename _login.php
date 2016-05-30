<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'smp');
mysqli_set_charset($db, 'utf8');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$user = mysqli_query($db, "SELECT * FROM users WHERE login = '{$_POST['login']}'");
	if(mysqli_num_rows($user) == 0){
		echo "<script>alert('Такого пользователя не существует, пожалуйста зарегистрируйтесь');</script>";
		echo "<script>document.location.href='index.php';</script>";
		return;
	}
	$user = mysqli_fetch_assoc($user);
	if(md5($_POST['password']) != $user['password']){
		echo "<script>alert('Неверный пароль');</script>";
		echo "<script>document.location.href='index.php';</script>";
		header('Location: index.php');
		return;
	}
	$_SESSION['user'] = $user;
	header('Location: index.php');
}
?>