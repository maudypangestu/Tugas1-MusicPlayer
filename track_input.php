<?php 

$alb = new app\Track();
$lst = $alb->Albumlist();
?>

<h2>TAMBAH LAGU</h2>

<form method="POST" action="track_proses.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="track_name" required=""></td>
		</tr>
		<tr>
			<td>ALBUM</td>
			<td>
				<select name="album_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['album_id']; ?>"><?php echo $ls['album_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>DURASI</td>
			<td><input type="text" name="waktu" required=""></td>
		</tr>
		<tr>
			<td>FILE (MP3)</td>
			<td><input type="file" name="track_file"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>