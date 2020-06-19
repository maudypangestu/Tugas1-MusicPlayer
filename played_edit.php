<?php

include "app/Played.php";

$id = $_GET['id'];

$playd = new Played();
$row = $playd->edit($id);

?>
<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">

<body>

	<div class="container">
		<div class="header">
			<center><img src="layout/assets/image/a.jpg"></center>
		</div>

		<center>
			<div class="menu">
				<a href="index.php">Home</a>
				<a href="artist_tampil.php">Artist</a>
				<a href="album_tampil.php">Album</a>
				<a href="track_tampil.php">Track</a>
				<a href="played_tampil.php">Played</a>
				<a href="logout.php">LogOut</a>

			</div>
		</center>


		<center>
			<h2>PlayList Edit</h2>
		</center>
		<form method="POST" action="played_proses.php">
			<input type="hidden" name="played_id" value="<?php echo $id; ?>">
			<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#DCFFFB" align="center">
				<tr>
					<td>Artist Id</td>
					<td><input type="text" name="artist_id" value="<?php echo $row['artist_id']; ?>"></td>
				</tr>
				<tr>
					<td>Album Id</td>
					<td><input type="text" name="album_id" value="<?php echo $row['album_id']; ?>"></td>
				</tr>
				<tr>
					<td>Track Id</td>
					<td><input type="text" name="track_id" value="<?php echo $row['track_id']; ?>"></td>
				</tr>
				<tr>
					<td>Played</td>
					<td><input type="text" name="played" value="<?php echo $row['played']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btn-edit" value="UPDATE"></td>
				</tr>
			</table>
		</form>