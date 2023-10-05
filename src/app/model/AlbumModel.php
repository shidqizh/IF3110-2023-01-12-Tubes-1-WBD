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

    public function tambahDataAlbum($data){
        $query = "
            INSERT INTO album VALUES ('', :nama_album, :artist, :durasi_album, :image_path, :tanggal_terbit, :genre)
        ";

        $this->db->query($query);
        $this->db->bind('nama_album', $data['nama_album']);
        $this->db->bind('artist', $data['artist']);
        $this->db->bind('durasi_album', $data['durasi_album']);
        $this->db->bind('image_path', $data['image_path']);
        $this->db->bind('tanggal_terbit', $data['tanggal_terbit']);
        $this->db->bind('genre', $data['genre']);

        $this->db->execute();
        return $this->db->countRow();

    }

    public function hapusDataAlbum($id){
        $query = "DELETE FROM album WHERE id_album = :id";
        $this->db->query($query);
        $this->db->bind('id_album', $id);
        $this->db->execute();

        return $this->db->countRow();
    }
}