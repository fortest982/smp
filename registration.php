<form action="" method="POST" role="form">
	<legend>Htubcnhfwbz</legend>
	<div class="form-group">
		<label for="">Имя:</label>
		<input required name="name" type="text" class="form-control" id="" placeholder="name">
		<label for="">Логин:</label>
		<input required name="login" type="text" class="form-control" id="" placeholder="login">
		<label for="">Пароль:</label>
		<input required name="password" type="password" class="form-control" id="" placeholder="password">
	</div>
	<button type="submit" class="btn btn-success">Зарегистрироваться &raquo;</button>
</form>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['login']) &&  preg_match("/^[A-Za-z0-9]*$/", $_POST['login'])){
			if(mysqli_num_rows(mysqli_query($db, "SELECT * FROM users WHERE login='{$_POST['login']}'")) != 0){
				echo 'Такой пользователь уже есть, выберите другой логин или войдите';
				return;
			}
			$login = strtolower($_POST['login']);
		} else {
			echo 'Некореектный логин, только буквы и цифры допустимы';
			return;
		}
		if(isset($_POST['password']) &&  preg_match("/^[A-Za-z0-9]*$/", $_POST['password'])){
			$password = md5($_POST['password']);
		} else {
			echo 'Некореектный пароль, только буквы и цифры допустимы';
			return;
		}
		mysqli_query($db, "INSERT INTO users(name, login, password) VALUES('{$name}', '{$login}', '{$password}')");
		$_SESSION['user'] = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE id=(SELECT MAX(id) FROM users)"));
		 header('Location: index.php');
	}
?>