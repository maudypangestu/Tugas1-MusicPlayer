<?php 

require_once "inc/config.php";

$artis = new app\Artist();

if ($_POST['btn-simpan']) {
	$artis->tambah();
	header("location:dashboard.php?page=artist_tampil");
}

if ($_POST['btn-edit']) {
	$artis->update();
	header("location:dashboard.php?page=artist_tampil");
}

if ($_GET['delete-id']) {
	$artis->delete($_GET['delete-id']);
	header("location:dashboard.php?page=artist_tampil");
}