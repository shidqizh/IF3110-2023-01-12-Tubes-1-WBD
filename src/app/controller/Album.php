<?php

class Album extends Controller{
    // default controller
    public function index(){
        $data['albumList'] = $this->model('AlbumModel')->getAllAlbum();
        $this->view('Album', $data);
    }

    public function pakeParams($artist="Default_Artist"){
        echo "This is $artist";
        $data['artist'] = $artist;
        $this->view('HomeView', $data);
    }

    public function add_album(){
        if($this->model("AlbumModel")->tambahDataAlbum($_POST) > 0){
            header('Location:' . BASEURL . '/album');
        }
    }

    public function remove_album($id){
        if($this->model('AlbumModel')->hapusDataAlbum($id) > 0){
            header('Location:' . BASEURL . '/album');
        }
        else{
            header('Location:' . BASEURL . '/album');
        }
    }

}