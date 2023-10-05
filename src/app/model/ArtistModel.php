<?php

class ArtistModel{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllArtist(){
        $this->db->query('SELECT * FROM artist');
        return $this->db->fetchAll();
    }

    public function tambahDataArtist($data){
        $query = "
            INSERT INTO artist VALUES (:artist, :country, :tipe)
        ";

        $this->db->query($query);
        $this->db->bind('artist', $data['artist']);
        $this->db->bind('country', $data['country']);
        $this->db->bind('tipe', $data['tipe']);

        $this->db->execute();
        return $this->db->countRow();

    }

    public function hapusDataArtist($id){
        $query = "DELETE FROM artist WHERE artist = :id";
        $this->db->query($query);
        $this->db->bind('artist', $id);
        $this->db->execute();

        return $this->db->countRow();
    }
}