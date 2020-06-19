
<?php 

$album = new app\Album();
$rows = $album->tampil();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Musik</title>
	<link rel="stylesheet" type="text/css" href="layout/css/style.css">
</head>
<body>
	<center><div class="container">
		<h2>Daftar Album</h2>
		<button>
				<a href="dashboard.php?page=album_input">Tambah Data Album</a>
		</button>
		<table class="tabletampil">
			<tr>
				<th>NO</th>
				<th>Nama Artis</th>
				<th>Nama Album</th>
				<th>AKSI</th>
			</tr>
			<?php 
			$no=1;
			 ?>
			<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['ART']; ?></td>
				<td><?php echo $row['album_name']; ?></td>
				<td>
					
						<a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>">Edit</a>
					

					
						<a href="dashboard.php?page=album_proses&delete-id=<?php echo $row['album_id']; ?>">Hapus</a>
					
				</td>
			</tr>
			<?php } ?>
		</table>
	</div></center>

</body>
</html>