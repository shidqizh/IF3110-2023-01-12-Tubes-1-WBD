<?php

class Home extends Controller{
    // default controller
    public function index(){
        $dataAlbum['albumList'] = $this->model('AlbumModel')->getAllAlbum();
        $dataSong['songList'] =$this->model('SongModel')->getAllSong();
        $dataUser['userList'] =$this->model('UserModel')->getAllUser();
        $dataArtist['artistList']=$this->model('AlbumModel')->getDistinctArtist();
        $data = array_merge($dataAlbum, $dataSong, $dataUser, $dataArtist);
        $_SESSION['data1'] = json_encode($data);
        
        $this->view('HomeView');
    }

    public function pakeParams($artist="Default_Artist"){
        echo "This is $artist";
        $data['artist'] = $artist;
        $this->view('HomeView', $data);
    }

}