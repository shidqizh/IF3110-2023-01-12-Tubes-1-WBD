<?php

class Login extends Controller{
    // default controller
    public function index(){
        // $data['albumList'] = $this->model('AlbumModel')->getAllAlbum();
        $this->view('Login');
    }
}