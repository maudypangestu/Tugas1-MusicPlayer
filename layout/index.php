<!DOCTYPE html>
<html>
<head>
	<title>Melody Playlist</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
	<div class="container">
		<div class="menu">
			<a href="index.php">Home</a>
			<a href="index.php?page=index_album">Album</a>
			<a href="index.php?page=index_login">Login</a>
		</div>
		<div class="header">
			<img src="<?php echo ASSET; ?>image/post.jpg" style="width: 100%">
		</div>

		

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>

		</div>

		<div class="footer">
			<h2><center>Copyright 2020. Maudy Pangestu</center></h2>
		</div>
	</div>
</body>
</html>