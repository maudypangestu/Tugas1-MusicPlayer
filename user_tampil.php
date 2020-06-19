<?php 

$user = new app\User();
$rows = $user->tampil();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Musik</title>
	<link rel="stylesheet" type="text/css" href="layout/css/style.css">
</head>
<body>
	<center><div class="container">
		<h2>Daftar User</h2>
		<button>
				<a href="dashboard.php?page=user_input">Tambah Data User</a>
		</button>
		<table class="tabletampil">
			<tr>
				<th>NO</th>
				<th>Nama User</th>
				<th>Email</th>
				<th>AKSI</th>
			</tr>
			<?php 
			$no=1;
			 ?>
			<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td>
					
						<a href="dashboard.php?page=user_edit&id=<?php echo $row['id']; ?>">Edit</a>
					

					
						<a href="dashboard.php?page=user_proses&delete-id=<?php echo $row['id']; ?>">Hapus</a>
					
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>

</body></center>
</html>