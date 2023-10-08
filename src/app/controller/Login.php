<?php

class Login extends Controller{
    // default controller
    public function index(){
        $data['userList'] = $this->model('UserModel')->getAllUser();
        $this->view('Login', $data);
    }

    public function cek_login(){
        $cekLogin = $this->model("UserModel")->checkLogin($_POST['username_or_email'], $_POST['password']);
        if($cekLogin){
            header('Location:' . BASEURL . '/public/home/index');
        }
        else{
            header('Location:' . BASEURL . '/public/login/index');
        }
        
    }
}