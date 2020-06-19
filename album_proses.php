<?php 

require_once "inc/config.php";

$album = new app\Album();

if ($_POST['btn-simpan']) {
	$album->tambah();
	header("location:dashboard.php?page=album_tampil");
}

if ($_POST['btn-edit']) {
	$album->update();
	header("location:dashboard.php?page=album_tampil");
}

if ($_GET['delete-id']) {
	$album->delete($_GET['delete-id']);
	header("location:dashboard.php?page=album_tampil");
}