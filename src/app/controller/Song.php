<?php

class Song extends Controller{
    // default controller
    public function index($namaLagu){
        $data['songList'] = $this->model('SongModel')->getAllSong();
        $data['namaLagu'] = $this->model('SongModel')->ambilLagu($namaLagu);
        $data['namaAlbum'] = $this->model('SongModel')->ambilAlbum($namaLagu);
        $this->view('Song', $data);
        // $this->view('HomeView', $data);
    }
}