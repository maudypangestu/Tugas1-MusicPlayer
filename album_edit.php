<?php
$id = $_GET['id'];

$album = new app\Album();
$rows = $album->edit($id);
$rowsartis = $album->Artislist();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Music Player</title>
</head>
<body>
	<div class="container">
		<br>
		<br>
		<form method="POST" action="album_proses.php">
			<h2>Edit Data Album</h2>
				<input type="hidden" name="album_id" value="<?php echo $id; ?>">
				<div class="control-group">

					<label>Nama Artis</label>
					<select name="artist_name">
						<?php foreach ($rowsartis as $ls) { ?>
					<option value="<?php echo $ls['artist_id']; ?>"<?php echo $rows['artist_id']==$ls['artist_id'] ? " selected" : ""; ?>><?php echo $ls['artist_name']; ?></option>
					<?php } ?>

            		
          		</select>

				</div>

				<div class="control-group">
					<label>Nama Album</label>
					<input type="text" name="album_name" value="<?php echo $rows['album_name']; ?>">
				</div>

				<div class="control-group">
					<input type="submit" name="btn-edit" value="UPDATE">
				</div>
		</form>
	</div>
</body>
</html>