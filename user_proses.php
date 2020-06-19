<?php 
require_once "inc/config.php";

$user = new app\User();

if ($_POST['btn-simpan']) {
	$user->input();
	header("location:dashboard.php?page=user_tampil");
}

if ($_POST['btn-edit']) {
	$user->update();
	header("location:dashboard.php?page=user_tampil");
}

if ($_GET['delete-id']) {
	$user->hapus($_GET['delete-id']);
	header("location:dashboard.php?page=user_tampil");
}