<?php

class Home extends Controller{
    // default controller
    public function index(){
        $this->view('HomeView');
    }

    public function pakeParams($artist="Default_Artist"){
        echo "This is $artist";
        $data['artist'] = $artist;
    }

}