<?php 

namespace app;

class user extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function input()
    {
        $nama = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $em = $_POST['nama'];

        $sql = "INSERT INTO tb_user (nama, email, password) 
        VALUES (:nama, :email, :password)";
        $stmt = $this->db->prepare($sql);
        $stmt->BindParam(":nama",$nama);
        $stmt->BindParam(":email",$em);
        $stmt->BindParam(":password",$password);
        $stmt->execute();

        return false;
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_user";
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
        $sql = "SELECT * FROM tb_user WHERE id=:id";
        $stmt= $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama = $_POST['nama'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $em = $_POST['email'];
        $id = $_POST['id'];

        $sql = "UPDATE tb_user SET nama=:nama, password=:password, email=:email WHERE id=:id";
        $stmt=$this->db->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->BindParam(":password",$password);
        $stmt->BindParam(":email",$em);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return false;
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM tb_user WHERE id=:id";
        $stmt=$this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return false;
    }
}

 ?>