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

    public function checkLogin($usernameOrEmail, $password){
        $query = "SELECT * FROM user WHERE username = :username_or_email OR email = :username_or_email";
        $this->db->query($query);
        $this->db->bind(':username_or_email', $usernameOrEmail);
        // $this->db->bind(':password', $password);
        $this->db->execute();

        $result = $this->db->fetchSingle();
        if($result){
            if(password_verify($password, $result['password'])){
                return true;
            }
        }
        return false;
    }
    // {
    //     $query = "SELECT COUNT(*) AS total FROM user WHERE username = :username_or_email";
    //     $this->db->query($query);
    //     $this->db->bind(':username_or_email', $usernameOrEmail);
    //     // $this->db->bind(':password', $password);
    //     $this->db->execute();

    //     $result = $this->db->fetchSingle();
    //     return $result['total'] > 0;
    // }

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