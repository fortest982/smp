<?php
$db = mysqli_connect('localhost', 'root', '', 'smp');
mysqli_set_charset($db, 'utf8');
?>
<?php
mysqli_query($db, "
	CREATE TABLE notes(
			id INT(11) AUTO_INCREMENT,
			title TEXT NOT NULL,
			content TEXT NOT NULL,
			auth_id INT(11),
			PRIMARY KEY(id)
		);
	");
mysqli_query($db, "
	CREATE TABLE users(
			id INT(11) AUTO_INCREMENT,
			name TEXT NOT NULL,
			login VARCHAR(30) NOT NULL,
			password TEXT NOT NULL,
			PRIMARY KEY(id)
		);
	");
?>