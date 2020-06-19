<center>
	<h2>DATA LAGU</h2>
	
	<button><a href="dashboard.php?page=track_input" class="btn">Tambah Lagu</a></button>


<?php 

$trc = new app\Track();
$rows = $trc->tampil();

?>

<table class="tabeltampil">
	<tr>
		<th>NO</th>
		<th>JUDUL</th>
		<th>ALBUM</th>
		<th>WAKTU</th>
		<th>PUTAR</th>
		<th>EDIT</th>
	</tr>
	
	 <?php 
			$no=1;
			 ?>
			<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['track_name']; ?></td>
				<td><?php echo $row['ART'] . " - " . $row['ALB']; ?></td>
				<td><?php echo $row['waktu']; ?></td>
				<td>
					<?php if (!empty($row['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>					
					<?php } ?>
				</td>
				<td>
					<button>
						<a href="dashboard.php?page=track_edit&id=<?php echo $row['track_id']; ?>">Edit</a>
					</button>
				</td>
			</tr>
			
		<?php } ?> 
	</table>




</center>