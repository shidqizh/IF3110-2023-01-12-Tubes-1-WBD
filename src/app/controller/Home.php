<?php

class Home extends Controller{
    // default controller
    public function index(){
        $dataAlbum['albumList'] = $this->model('AlbumModel')->getAllAlbum();
        $dataSong['songList'] =$this->model('SongModel')->getAllSong();
        $dataUser['userList'] =$this->model('UserModel')->getAllUser();
        
        $data = array_merge($dataAlbum, $dataSong, $dataUser);
        $_SESSION['data1'] = json_encode($data);
        
        $this->view('Discover');
    }

    public function detail(){
        
    }

    public function add_song(){
        // if($this->model("SongModel")->tambahDataSong($_POST) > 0){
        //     header('Location:' . BASEURL . 'public/home/index');
        // }
        var_dump($_POST);
    }
    
    

    public function add_user(){
        if($this->model("UserModel")->tambahDataUser($_POST) > 0){
            header('Location:' . BASEURL . '/home');
        }
    }


    public function remove_song($id){
        if($this->model('SongModel')->hapusDataSong($id) > 0){
            header('Location:' . BASEURL . '/home');
        }
        else{
            header('Location:' . BASEURL . '/home');
        }
    }

    public function remove_user($id){
        if($this->model('UserModel')->hapusDataUser($id) > 0){
            header('Location:' . BASEURL . '/home');
        }
        else{
            header('Location:' . BASEURL . '/home');
        }
    }

    
    public function pakeParams($artist="Default_Artist"){
        echo "This is $artist";
        $data['artist'] = $artist;
        $this->view('HomeView', $data);
    }

}