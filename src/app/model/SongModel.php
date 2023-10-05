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

    public function tambahDataSong($data){
        $query = "
            INSERT INTO song VALUES ('', :nama_lagu, :artist, :tanggal_terbit, :genre, :durasi_lagu, :audio_path, :image_path, '1')
        ";

        $this->db->query($query);
        $this->db->bind('nama_lagu', $data['nama_lagu']);
        $this->db->bind('artist', $data['artist']);
        $this->db->bind('tanggal_terbit', $data['tanggal_terbit']);
        $this->db->bind('genre', $data['genre']);
        $this->db->bind('durasi_lagu', $data['durasi_lagu']);
        $this->db->bind('audio_path', $data['audio_path']);

        $this->db->execute();
        return $this->db->countRow();

    }

    public function hapusDataSong($id){
        $query = "DELETE FROM song WHERE id_song = :id";
        $this->db->query($query);
        $this->db->bind('id_song', $id);
        $this->db->execute();

        return $this->db->countRow();
    }


}