<?php
$db = mysqli_connect('localhost', 'root', '', 'smp');
mysqli_set_charset($db, 'utf8');
?>
<?php
$file = fopen('zametki.txt', 'r');
$notes = json_decode(fread($file, filesize("nts.txt")), true);
$file = fopen('users.txt', 'r');
$users = json_decode(fread($file, filesize("usr.txt")), true);
for($i = 0; $i < count($notes); $i++){
	mysqli_query($db, "INSERT INTO notes(id, title, content, auth_id)
		VALUES({$notes[$i]['id']},'{$notes[$i]['title']}','{$notes[$i]['content']}',{$notes[$i]['auth_id']})");
}

for($i = 0; $i < count($users); $i++){
	mysqli_query($db, "INSERT INTO users(id, name, login, password)
		VALUES({$users[$i]['id']},'{$users[$i]['name']}','{$users[$i]['login']}','{$users[$i]['password']}')");
}
?>