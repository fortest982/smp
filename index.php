<?php include 'header.php'; ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

				<?php
				if(isset($_SESSION['user'])){
					if(isset($_GET['page'])){
						switch ($_GET['page']) {
							case 'add':
								include 'add.php';
								break;

							case 'update':
								include 'update.php';
								break;
							
							default:
								include 'notes.php';
								break;
						}
					} else {
						include 'notes.php';
					}
				} else {
					if(isset($_GET['page'])){
						switch ($_GET['page']) {
							case 'registration':
								include 'registration.php';
								break;
							
							default:
								include 'login.php';
								break;
						}
					} else {
						include 'login.php';
					}
				}
				?>
            </div>
        </div>
<?php include 'footer.php'; ?>