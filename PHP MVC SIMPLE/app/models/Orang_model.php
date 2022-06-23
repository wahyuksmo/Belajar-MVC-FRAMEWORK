<?php 


class Orang_model {
    private $table = 'orang';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }



    public function getAllUser() {
        $this->db->query("SELECT * FROM ". $this->table);
        return $this->db->resultSet();

    }
    
   public function getUserbyId($id) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
   }

   public function tambahData($data) {
     $query = "INSERT INTO orang VALUES ('', :nama, :alamat, :status) ";

     $this->db->query($query);
     $this->db->bind('nama', $data['nama']);
     $this->db->bind('alamat', $data['alamat']);
     $this->db->bind('status', $data['status']);

     $this->db->execute();
     
     return $this->db->rowCount();

   }




}



?>