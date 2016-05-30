<?php
	session_start();
    $db = mysqli_connect('localhost', 'root', '', 'smp');
    mysqli_set_charset($db, 'utf8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Заметки</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/simple-sidebar.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
			<ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <?php echo isset($_SESSION['user']['name']) ? $_SESSION['user']['name'] : 'Notes'; ?>
                    </a>
                </li>
			<?php if(isset($_SESSION['user'])): ?>
				<li><a href="?page=notes">Все заметки</a></li>
				<li><a href="?page=add">Новая заметка</a></li>
				<li><a href="_logout.php">Выход</a></li>
			<?php else: ?>
				<li><a href="?page=login">Вход</a></li>
				<li><a href="?page=registration">Регистрация</a></li>
			<?php endif; ?>
			</ul>
        </div>
        <!-- /#sidebar-wrapper -->