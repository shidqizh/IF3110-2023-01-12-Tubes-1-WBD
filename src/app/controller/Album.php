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
        if (!$_POST['nama_album'] || !$_POST['artist'] || !$_POST['durasi_album'] || !$_POST['image_path'] || !$_POST['tanggal_terbit'] || !$_POST['genre']) {
            header('Location:' . BASEURL . '/album/index');
        }
        else{
            $this->model("AlbumModel")->tambahDataAlbum($_POST);
            header('Location:' . BASEURL . '/album/index');
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