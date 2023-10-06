<?php

class Song extends Controller{
    // default controller
    public function index(){
        $data['songList'] = $this->model('SongModel')->getAllSong();
        $this->view('Song', $data);
        // $this->view('HomeView', $data);
    }
}