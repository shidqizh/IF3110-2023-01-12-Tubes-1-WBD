<?php

class AlbumModel{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllAlbum(){
        $this->db->query('SELECT * FROM album');
        return $this->db->fetchAll();
    }
}