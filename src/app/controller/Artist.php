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
        // if($this->model("ArtistModel")->tambahDataArtist($_POST) > 0){
        //     header('Location:' . BASEURL . '/home');
        // }
        var_dump($_POST);
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