<?php

class Album extends Controller{
    // default controller
    public function index(){
        $data['albumList'] = $this->model('AlbumModel')->getAllAlbum();
        $this->view('AlbumView', $data);
    }

    public function pakeParams($artist="Default_Artist"){
        echo "This is $artist";
        $data['artist'] = $artist;
        $this->view('HomeView', $data);
    }

}