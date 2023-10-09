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

    public function getAllitem(){
        $this->db->query('SELECT DISTINCT artist, genre FROM album NATURAL JOIN song');
        return $this->db->fetchAll();
    }

    public function getDistinctArtist(){
        $this->db->query('SELECT DISTINCT artist FROM album');
        return $this->db->fetchAll();
    }

    public function tambahDataAlbum($data){
        $query = "
            INSERT INTO album (nama_album, artist, durasi_album, image_path, tanggal_terbit, genre) VALUES (:nama_album, :artist, :durasi_album, '/public/images/apartofme.jpg', :tanggal_terbit, :genre)
        ";

        $this->db->query($query);
        $this->db->bind('nama_album', $data['nama_album']);
        $this->db->bind('artist', $data['artist']);
        $this->db->bind('durasi_album', $data['durasi_album']);
        // $this->db->bind('image_path', $data['image_path']);
        $this->db->bind('tanggal_terbit', $data['tanggal_terbit']);
        $this->db->bind('genre', $data['genre']);

        $this->db->execute();
        return $this->db->lastInsertID();

    }
    public function cekArtisAda($namaArtis){
        $query = "SELECT COUNT(*) AS total FROM artist WHERE artist = :nama_artis";
        $this->db->query($query);
        $this->db->bind('nama_artis', $namaArtis);
        $this->db->execute();
    
        $result = $this->db->fetchSingle();
        return $result['total'] > 0;
    }

    public function hapusDataAlbum($id){
        $query = "DELETE FROM album WHERE id_album = :id_album";
        $this->db->query($query);
        $this->db->bind('id_album', $id);
        $this->db->execute();

        return $this->db->countRow();
    }
}