<?php 
$id = $_GET['id'];

$artis = new app\Artist();
$row = $artis->edit($id);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Musik</title>
	<link rel="stylesheet" type="text/css" href="layout/css/style.css">
</head>
<body>
	<div class="container">
		<br>
		<br>
		<form method="POST" action="artist_proses.php">
				<h2>Edit Data Artis</h2>
				
				<input type="hidden" name="artist_id" value="<?php echo $id; ?>">

				<div class="control-group">
					<label>Nama Artis</label>
					<input type="text" name="artist_name" value="<?php echo $row['artist_name']; ?>">
				</div>

				<div class="control-group">
					<input type="submit" name="btn-edit" value="UPDATE">
				</div>
		</form>
	</div>
</body>
</html>