<?php

class SongModel{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllSong(){
        $this->db->query('SELECT * FROM song');
        return $this->db->fetchAll();
    }
}