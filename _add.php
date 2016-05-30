<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'smp');
mysqli_set_charset($db, 'utf8');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$content = htmlspecialchars($_POST['content']);
	$title = htmlspecialchars($_POST['title']);
	mysqli_query($db, "INSERT INTO notes(title, content, auth_id) VALUES('{$title}', '{$content}', {$_SESSION['user']['id']})");
	header('Location: index.php');
}

?>
