<?php 

$artis = new app\Artist();
$rows = $artis->tampil();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Musik</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>
	<center>
		<div class="container">
		<h2>Daftar Artis</h2>
		<button>
				<a href="dashboard.php?page=artist_input">Tambah Data Artis</a>
		</button>
		<table class="tabletampil">
			<tr>
				<th>NO</th>
				<th>Nama Artis</th>
				<th>AKSI</th>
			</tr>
			<?php 
			$no=1;
			 ?>
			<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['artist_name']; ?></td>
				<td>
					
						<a href="dashboard.php?page=artist_edit&id=<?php echo $row['artist_id']; ?>">Edit</a>
					

					
						<a href="dashboard.php?page=artist_proses&delete-id=<?php echo $row['artist_id']; ?>">Hapus</a>
					
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	</center>

</body>
</html>