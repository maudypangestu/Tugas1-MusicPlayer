<h2><center>SILAHKAN LOGIN :)</center></h2>

<?php 

// Kalau login error tampilkan notifikasi
if (isset($_SESSION['login_error'])) {
	echo '<p style="color:red">Login tidak ditemukan!</p>';
	unset($_SESSION['login_error']);
}

// Kalau sesi user_name ada, redirect
if (isset($_SESSION['email'])) {	
	header("location:dashboard.php"); 
}

?>

