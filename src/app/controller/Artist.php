<?php

class Artist extends Controller{
    // default controller
    public function index(){
        $data['artistList']=$this->model('ArtistModel')->getAllArtist();
        $this->view('Artist', $data);
    }

    public function pakeParams($artist="Default_Artist"){
        echo "This is $artist";
        $data['artist'] = $artist;
        $this->view('HomeView', $data);
    }

    public function add_artist(){
        if (!$_POST['artist'] || !$_POST['country'] || !$_POST['tipe']) {
            header('Location:' . BASEURL . '/artist/index');
        }
        else{
            $this->model("ArtistModel")->tambahDataArtist($_POST);
            header('Location:' . BASEURL . '/artist/index');
        }
    }

    public function remove_artist($id){
        if($this->model('ArtistModel')->hapusDataArtist($id) > 0){
            header('Location:' . BASEURL . '/artist');
        }
        else{
            header('Location:' . BASEURL . '/artist');
        }
    }

}