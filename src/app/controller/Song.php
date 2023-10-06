<?php

class Song extends Controller{
    // default controller
    public function index(){
        $data['albumList'] = $this->model('AlbumModel')->getAllAlbum();
        $this->view('Song', $data);
        // $this->view('HomeView', $data);
    }
}