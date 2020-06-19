<link rel="stylesheet" type="text/css" href="layout/assets/css/input.css">
<?php 
$id = $_GET['id'];

$user = new app\User();
$row = $user->edit($id);

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
		<form method="POST" action="user_proses.php">
			<h2>Edit Data Pengguna</h2>
				
			<input type="hidden" name="id" value="<?php echo $id; ?>">

				<div class="control-group">
					<label>Nama Pengguna</label>
					<input type="text" name="name" value="<?php echo $row['nama']; ?>" required>
				</div>

				<div class="control-group">
					<label>Email</label>
					<input type="text" name="email" value="<?php echo $row['email']; ?>" required>
				</div>

				<div class="control-group">
					<label>Password</label>
					<input type="text" name="pass" value="<?php echo $row['password']; ?>" required>
				</div>

				<div class="control-group">
					<input type="submit" name="btn-edit" value="UPDATE">
				</div>
		</form>
	</div>
</body>
</html>