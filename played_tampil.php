<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">



<?php

include "app/Played.php";

$playd = new Played();
$rows = $playd->tampil();

?>

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
			<h2>LIST PLAYED</h2>
		</center>
		<center><a class="tambah" href="played_input.php">Tambah</a></center>
		<div class="main">

			<table>
				<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#DCFFFB" align="center">
					<tr>
						<th>Played Id</th>
						<th>artis Id</th>
						<th>Album Id</th>
						<th>Track Id</th>
						<th>played</th>
						<th>EDIT</th>
						<th>DELETE</th>
					</tr>
					<?php foreach ($rows as $row) { ?>
						<tr>
							<td><?php echo $row['played_id']; ?></td>
							<td><?php echo $row['artist_id']; ?></td>
							<td><?php echo $row['album_id']; ?></td>
							<td><?php echo $row['track_id']; ?></td>
							<td><?php echo $row['played']; ?></td>
							<td><a class="edit" href="played_edit.php?id=<?php echo $row['played_id']; ?>">Edit</a></td>
							<td><a onclick="return confirm('Are You Sure')" class="delete" href="played_proses.php?delete-id=<?php echo $row['played_id']; ?>">Delete</a></td>
						</tr>
					<?php } ?>
				</table>
		</div>
	</div>
</body>