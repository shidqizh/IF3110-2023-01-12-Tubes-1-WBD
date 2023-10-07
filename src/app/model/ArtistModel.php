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
        //blm fix pake countrow atau lastinsert

    }

    public function hapusDataArtist($id){
        $query = "DELETE FROM artist WHERE artist = :artist";
        $this->db->query($query);
        $this->db->bind('artist', $id);
        $this->db->execute();

        return $this->db->countRow();
    }

    public function cekArtisAda($namaArtis){
        $query = "SELECT COUNT(*) AS total FROM artist WHERE artist = :nama_artis";
        $this->db->query($query);
        $this->db->bind('nama_artis', $namaArtis);
        $this->db->execute();
    
        $result = $this->db->fetchSingle();
        return $result['total'] > 0;
    }
    
}