<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'smp');
mysqli_set_charset($db, 'utf8');
if(isset($_GET['id']) && isset($_GET['auth_id']) && $_GET['auth_id'] == $_SESSION['user']['id']){
	mysqli_query($db, "DELETE FROM notes WHERE id={$_GET['id']}");
	header('Location: index.php');
} else {
	header('Location: index.php');
}
?>