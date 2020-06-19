<?php

namespace app;


class Album extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function input()
	{

		$artis = $_POST['artist_name'];
		$album= $_POST['album_name'];

		$sql = "INSERT INTO tb_album (artist_id, album_name) VALUES(:artist_id, :album_name)";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $artis);
		$stmt->bindParam(":album_name", $album);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT tb_album.*, tb_artist.artist_name as ART 
		FROM tb_album, tb_artist
		WHERE tb_album.artist_id=tb_artist.artist_id ORDER BY tb_album.album_name";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}

		return $data;
	}

	public function Artislist()
	{
		$sql = "SELECT * FROM tb_artist";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}


	public function edit($id)
	{
		$sql = "SELECT * FROM tb_album WHERE album_id=:album_id";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();
		$row = $stmt->fetch();

		return $row;
	}
	public function update()
	{
		$artis = $_POST['artist_name'];
		$album = $_POST['album_name'];
		$id = $_POST['album_id'];

		$sql = "UPDATE tb_album SET artist_id=:artist_id, album_name=:album_name WHERE album_id=:album_id";
		$stmt=$this->db->prepare($sql);
		$stmt->BindParam(":artist_id",$artis);
		$stmt->BindParam(":album_name",$album);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_album WHERE album_id=:album_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		return false;
	}
}
?>
