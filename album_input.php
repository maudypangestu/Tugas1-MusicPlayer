<?php

$album = new app\Album();
$rowsartis = $album->Artislist();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Musik</title>
</head>
<body>
	<div class="container">
		<br>
		<br>
		<form method="POST" action="album_proses.php">
			<h2>Input Data Album</h2>
				
				<div class="control-group">
					<label>Nama Artis</label>
					<select name="artist_name">
            		<?php foreach($rowsartis as $row) { ?>
            			<option value="<?php echo $row['artist_id'] ?>"><?php echo $row['artist_name'] ?></option>
            		<?php } ?>
          		</select>

				</div>

				<div class="control-group">
					<label>Nama Album</label>
					<input type="text" name="album_name" required>
				</div>

				<div class="control-group">
					<input type="submit" name="btn-simpan" value="SIMPAN">
				</div>
		</form>
	</div>
</body>
</html>