<?php
$db = mysqli_connect('localhost', 'root', '', 'smp');
mysqli_set_charset($db, 'utf8');
?>
<?php
$sql_result = mysqli_query($db, "SELECT * FROM notes");
$notes = array();
while ($note = mysqli_fetch_assoc($sql_result)) {
	array_push($notes, $note);
}
$sql_result = mysqli_query($db, "SELECT * FROM users");
$users = array();
while ($user = mysqli_fetch_assoc($sql_result)) {
	array_push($users, $user);
}
$file = fopen('users.txt', 'w');
fwrite($file, json_encode($users));
$file = fopen('zametki.txt', 'w');
fwrite($file, json_encode($notes));
echo 'Success';
?>