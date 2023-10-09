<?php

class Home extends Controller{
    // default controller
    public function index($page=1){
        $data['songList'] = $this->model('SongModel')->getAllSong();
        $data['imageSong'] = $this->model('SongModel')->getSongImage();
        $data['page'] = $page;
        $this->view('Discover', $data);
    }

    public function detail(){
        
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


    public function remove_song($id){
        if($this->model('SongModel')->hapusDataSong($id) > 0){
            header('Location:' . BASEURL . '/home/index');
        }
        else{
            header('Location:' . BASEURL . '/home/index');
        }
    }

    public function edit_song(){
        if (!$_POST['nama_lagu'] || !$_POST['artist'] || !$_POST['tanggal_terbit'] || !$_POST['genre'] || !$_POST['durasi_lagu']) {
            header('Location:' . BASEURL . '/home/index');
        }
        else{
            $cekArtis = $this->model("SongModel")->cekArtisAda($_POST['artist']);
            if($cekArtis){
                $this->model('SongModel')->ubahDataSong($_POST);
                header('Location:' . BASEURL . '/home/index');
            }
            else{
                header('Location:' . BASEURL . '/home/index');
            }
            
        }
    }
    
    public function pakeParams($artist="Default_Artist"){
        echo "This is $artist";
        $data['artist'] = $artist;
        $this->view('HomeView', $data);
    }

    public function cobaPag($page=1){
        $data['songList'] = $this->model('SongModel')->getAllSong();
        $data['page'] = $page;
        $this->view('Discover', $data);
    }

}