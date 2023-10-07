<?php

class User extends Controller{
    // default controller
    public function index($page=1){
        $data['songList'] = $this->model('SongModel')->getAllSong();
        $data['page'] = $page;
        $this->view('Discover', $data);
    }

    public function add_song(){
        if (!$_POST['nama_lagu'] || !$_POST['artist'] || !$_POST['tanggal_terbit'] || !$_POST['genre'] || !$_POST['durasi_lagu']) {
            header('Location:' . BASEURL . '/home/index');
        }
        else{
            $cekArtis = $this->model("SongModel")->cekArtisAda($_POST['artist']);
            if($cekArtis){
                $this->model("SongModel")->tambahDataSong($_POST);
                header('Location:' . BASEURL . '/home/index');
            }
            else{
                header('Location:' . BASEURL . '/home/index');
            }
            
        }
    }

    public function add_user(){
        if (!$_POST['email'] || !$_POST['username'] || !$_POST['password']) {
            header('Location:' . BASEURL . '/user/index');
        }
        else{
            $this->model("UserModel")->tambahDataUser($_POST);
            header('Location:' . BASEURL . '/home/index');
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

}