<form action="_add.php" method="POST" role="form">
	<legend>Добавить заметку</legend>

	<div class="form-group">
		<label for="">Заголовок заметки:</label>
		<input required name="title" type="text" class="form-control" id="" placeholder="Title">
		<label for="">Содержание заметки:</label>
		<textarea name="content" class="form-control" id="" placeholder="Content"></textarea>
	</div>
	<button type="submit" class="btn btn-info">Добавить</button>
</form>