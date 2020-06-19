<?php 

// Kalau sesi user_name tidak ada, redirect
/*if (!isset($_SESSION['user_name'])) {	
	header("location:index.php"); 
}*/ 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Music Player</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
	<link href="<?php echo ASSET; ?>image/post.jpg" rel="shortcut icon">
</head>
<body>
	<div class="container">
		<div class="menu">
			<a href="dashboard.php">Dashboard</a>
			<a href="dashboard.php?page=artist_tampil">Artis</a>
			<a href="dashboard.php?page=album_tampil">Album</a>
			<a href="dashboard.php?page=track_tampil">Lagu</a>
			<a href="dashboard.php?page=user_tampil">User</a>
			<a href="dashboard.php?page=user_logout">Logout</a>
		</div>
		<div class="header">
			<img style="width: 100%;" src="layout/assets/image/post.jpg">
		</div>
		

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "main.php";
			}

			?>

		</div>

		<div class="footer">
			<h2><center>Copyright 2020. Maudy Pangestu</center></h2>
		</div>
	</div>
</body>
</html>