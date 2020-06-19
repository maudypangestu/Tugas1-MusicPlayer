<?php 

// Config
require_once "inc/config.php";

$trc = new app\Track();

if ($_POST['btn-simpan']) {
	$trc->input();
	header("location:dashboard.php?page=track_tampil");
}

if ($_POST['btn-update']) {
	$trc->update();
	header("location:dashboard.php?page=track_tampil");
}
