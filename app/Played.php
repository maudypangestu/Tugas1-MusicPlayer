<?php

namespace app;

class Played extends Controller
{

	public function __construct()
	{
		$this->db = new Controller();
		$this->db = $this->db->dbConnect();
	}

	public function input()
	{
		$artis = $_POST['artist_name'];
		$album = $_POST['album_name'];
		$trck = $_POST['track_name'];
		$waktu = $_POST['played']

		$sql = "INSERT INTO tb_played (artist_id, album_id, track_id, played) 
				VALUES (:artist_id, :album_id, :track_id, :played)";
		$stmt = $this->db->prepare($sql);
		$stmt->BindParam(":artist_id",$artis);
		$stmt->BindParam(":album_id",$album);
		$stmt->BindParam(":track_id",$trck);
		$stmt->BindParam(":played",$waktu);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_played
				JOIN tb_artist ON tb_played.artist_id=tb_artist.artist_id
				JOIN album ON tb_played.album_id=tb_album.album_id
				JOIN track ON tb_played.track_id=tb_track.track_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}

		return $data;
	}
	public function edit($id)
	{
		$sql = "SELECT * FROM tb_played WHERE artist_id=:artist_id";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $id);
		$stmt->execute();
		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{

		$artis = $_POST['nama_artis'];
		$album = $_POST['nama_album'];
		$trck = $_POST['nama_track'];
		$wkt = $_POST['played'];
		$id = $_POST['played_id'];

		$sql = "UPDATE tb_played SET tb_played=:tb_played, artist_id=:artist_id, album_id=:album_id, played=:played, track_id=:track_id 
				WHERE played_id=:played_id";
		$stmt=$this->db->prepare($sql);
		$stmt->BindParam(":artist_id",$artis);
		$stmt->BindParam(":album_id",$album);
		$stmt->BindParam(":track_id",$trck);
		$stmt->BindParam(":played",$wkt); 
		$stmt->bindParam(":played_id", $id);
		$stmt->execute();

		return false;
	}
	public function delete($id)
	{

		$sql = "DELETE FROM tb_played WHERE played_id=:played_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":played_id", $id);
		$stmt->execute();
		return false;
	}
}
?>