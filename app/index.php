<?php

namespace app;

class index extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function track()
	{
		$sql = "SELECT tr.*, al.album_name as ALB, ar.artist_name as ART
		FROM track tr 
		INNER JOIN tb_album al ON tr.album_id=al.album_id
		LEFT JOIN tb_artist ar ON al.artist_id=ar.artist_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function album()
	{
		$sql = "SELECT tr.*, al.album_name as ALB, ar.artist_name as ART
		FROM track tr 
		INNER JOIN album al ON tr.album_id=al.album_id
		LEFT JOIN artist ar ON al.artist_id=ar.artist_id ORDER BY ALB";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function login()
	{

		$user_name = $_POST['email'];
		$user_password = $_POST['password'];

		$stmt = $this->db->prepare("SELECT * FROM tb_user WHERE email=:email");
		$stmt->bindParam(":email", $user_name);
		$stmt->execute();

		$row = $stmt->fetch();

		if (!empty($row) AND password_verify($user_password, $row['password'])) {

			$_SESSION['login']  = true;
			$_SESSION['id']  = $row['id'];
			$_SESSION['email']  = $row['email'];
			$_SESSION['nama']  = $row['nama'];
			
		} else {
			$_SESSION['login_error'] = "Login tidak ditemukan!";
		}

		return false;
	}
}