<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'smp');
mysqli_set_charset($db, 'utf8');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$content = htmlspecialchars($_POST['content']);
	$title = htmlspecialchars($_POST['title']);
	$l = mysqli_query($db, "UPDATE notes SET title='{$title}', content='{$content}' WHERE id={$_GET['id']}");
	header('Location: index.php');
}
?>