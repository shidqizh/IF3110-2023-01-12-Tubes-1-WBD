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

    public function getDistinctArtist(){
        $this->db->query('SELECT DISTINCT artist FROM album');
        return $this->db->fetchAll();
    }
}