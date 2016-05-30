<h1>Notes</h1>
<?php
	$notesSQL = mysqli_query($db, "SELECT * FROM notes WHERE auth_id = {$_SESSION['user']['id']}");
?>
<?php while ($note = mysqli_fetch_assoc($notesSQL)): ?>
	<div class="item">
		<div class="thumbnail">
			<div class="caption">
				<h3><?=$note['title']; ?></h3>
				<p><?=$note['content']; ?></p>
				<a href="index.php?page=update&id=<?=$note['id']; ?>&auth_id=<?=$note['auth_id']; ?>" class="btn btn-success">Изменить</a>
				<a href="_delete.php?id=<?=$note['id']; ?>&auth_id=<?=$note['auth_id']; ?>" class="btn btn-danger">Удалить</a>
			</div>
		</div>
	</div>
<?php endwhile; ?>