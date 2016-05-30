<?php
	if(isset($_GET['id']) && isset($_GET['auth_id']) && $_GET['auth_id'] == $_SESSION['user']['id']){
		try{
			$forUpdate = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM notes WHERE id={$_GET['id']}"));
		} 
		catch(Exception $e){
			header('Location: index.php');
		}
	} else {
		header('Location: index.php');
	}
?>
<form action="_update.php?id=<?=$_GET['id']; ?>&auth_id=<?=$_GET['auth_id']; ?>" method="POST" role="form">
	<legend>Изменить</legend>

	<div class="form-group">
		<label for="">Заголовок:</label>
		<input required name="title" type="text" class="form-control" id="" placeholder="Title" value="<?=$forUpdate['title']; ?>">
		<label for="">Содержание:</label>
		<textarea name="content" class="form-control" id="" placeholder="Content" value=""><?=$forUpdate['content']; ?></textarea>
	</div>
	<button type="submit" class="btn btn-warning">Изменить &raquo;</button>
</form>