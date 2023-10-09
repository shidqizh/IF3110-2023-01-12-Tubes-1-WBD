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

    public function getUserByUsername($usernameOrEmail){
        $query = "SELECT * FROM user WHERE (username = :username_or_email OR email = :username_or_email)";
        $this->db->query($query);
        $this->db->bind('username_or_email', $usernameOrEmail);
        $this->db->execute();

        return $this->db->fetchSingle();
    }

    public function checkLogin($usernameOrEmail, $password){
        $query = "SELECT * FROM user WHERE (username = :username_or_email OR email = :username_or_email)";
        $this->db->query($query);
        $this->db->bind('username_or_email', $usernameOrEmail);
        
        $this->db->execute();

        $result = $this->db->fetchSingle();
        $this->db->bind('password', $password);
        if($result){
            if($password == $result['password']){
                return true;
            }
        }
        return false;
    }

    public function checkRegister($username, $email)
    {
        $query = "SELECT COUNT(*) AS total FROM user WHERE username = :username OR email = :email";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('email', $email);
        $this->db->execute();

        $result = $this->db->fetchSingle();
        return $result['total'] > 0;
    }

    public function tambahDataUser($data){
        $query = "
            INSERT INTO user (username, email, password, is_admin)VALUES ( :username, :email, :password, '0')
        ";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();
        return $this->db->lastInsertID();

    }

    public function hapusDataUser($id){
        $query = "DELETE FROM user WHERE id_user = :id";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->execute();

        return $this->db->countRow();
    }
}