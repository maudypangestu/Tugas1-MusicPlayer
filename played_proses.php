<?php

include_once "app/Controller.php";
include_once "app/Played.php";

$playd = new Played();

if ($_POST['btn-simpan']) {
	$playd->input();
	header("location:played_tampil.php");
}

if ($_POST['btn-edit']) {
	$playd->update();
	header("location:played_tampil.php");
}

if ($_GET['delete-id']) {
	$playd->delete($_GET['delete-id']);
	header("location:played_tampil.php");
}
