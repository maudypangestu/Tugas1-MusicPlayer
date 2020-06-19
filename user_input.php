<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Musik</title>
</head>
<body>
	<div class="container">
		<br>
		<br>
		<form method="POST" action="user_proses.php">
			<h2>Input Data Pengguna</h2>
				
				<div class="control-group">
					<label>Nama Pengguna</label>
					<input type="text" name="nama" id="nama" required>
				</div>
				<div class="control-group">
					<label>Email</label>
					<input type="text" name="email" id="email" required>
				</div>

				<div class="control-group">
					<label>Password</label>
					<input type="text" name="pass" id="password" required>
				</div>


				<div class="control-group">
					<input type="submit" name="btn-simpan" value="SIMPAN">
				</div>
		</form>
	</div>
</body>
</html>