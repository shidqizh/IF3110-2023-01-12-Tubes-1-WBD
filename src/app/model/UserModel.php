<?php

class UserModel{
    private $db; 

    public function __construct(){
        $this->db = new Database;
    }
    public function getAllUser(){
        $this->db->query('SELECT * FROM user');
        return $this->db->fetchAll();
    }

    public function tambahDataUser($data){
        $query = "
            INSERT INTO user VALUES ('', :email, :username, :password, :is_admin)
        ";

        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('is_admin', $data['is_admin']);

        $this->db->execute();
        return $this->db->countRow();

    }

    public function hapusDataUser($id){
        $query = "DELETE FROM user WHERE id_user = :id";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->execute();

        return $this->db->countRow();
    }
}