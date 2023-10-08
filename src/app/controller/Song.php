<?php

class Song extends Controller{
    // default controller
    public function index($namaLagu){
        $data['songList'] = $this->model('SongModel')->getAllSong();
        $data['namaLagu'] = $this->model('SongModel')->ambilLagu($namaLagu);
        $this->view('Song', $data);
        // $this->view('HomeView', $data);
    }
}