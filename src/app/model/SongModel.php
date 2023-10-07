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
    public function getSongById($id){
        $this->db->query('SELECT * FROM song WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->fetchAll();
    }

    public function ambilLagu($namaLagu){
        $this->db->query('SELECT * FROM song WHERE nama_lagu = :nama_lagu');
        $this->db->bind('nama_lagu', $namaLagu);
        return $this->db->fetchSingle();
    }

    public function ambilAlbum($namaLagu){
        $this->db->query('SELECT * FROM song WHERE id_album = :id_album');
        $this->db->bind('id_album', $namaLagu);
        return $this->db->fetchSingle();
    }

    public function tambahDataSong($data){
        $query = "
            INSERT INTO song (nama_lagu, artist, tanggal_terbit, genre, durasi_lagu, audio_path, id_album )VALUES ( :nama_lagu, :artist, :tanggal_terbit, :genre, :durasi_lagu, :audio_path, '1')
        ";

        $this->db->query($query);
        $this->db->bind('nama_lagu', $data['nama_lagu']);
        $this->db->bind('artist', $data['artist']);
        $this->db->bind('tanggal_terbit', $data['tanggal_terbit']);
        $this->db->bind('genre', $data['genre']);
        $this->db->bind('durasi_lagu', $data['durasi_lagu']);
        $this->db->bind('audio_path', $data['audio_path']);

        $this->db->execute();
        return $this->db->lastInsertID();

    }

    public function hapusDataSong($id){
        $query = "DELETE FROM song WHERE id_song = :id_song";
        $this->db->query($query);
        $this->db->bind('id_song', $id);
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

    public function ubahDataSong($data){
        $query = "UPDATE song SET nama_lagu = :nama_lagu,
         artist = :artist, 
         tanggal_terbit = :tanggal_terbit,
        genre = :genre,
         durasi_lagu = :durasi_lagu, 
         audio_path = :audio_path";

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
    


}