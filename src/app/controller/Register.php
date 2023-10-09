<?php

class Register extends Controller{
    // default controller
    public function index(){
        $data['userList'] = $this->model('UserModel')->getAllUser();
        $this->view('Register', $data);
    }

    public function cek_login(){
        $modelUser = $this->model("UserModel");
        $cekLogin = $this->model("UserModel")->checkLogin($_POST['username_or_email'], $_POST['password']);
        if($cekLogin){
            $user = $modelUser->getUserByUsername($_POST['username_or_email']);
            $_SESSION['is_admin'] = $user['is_admin'];
            header('Location:http://localhost:8080/public/home/index');
        }
        else{
            header('Location:http://localhost:8080/public/login/index');
        }
        
    }

    public function cek_register(){
        if (!$_POST['username'] || !$_POST['email']) {
            header('Location:http://localhost:8080/public/register/index');
        }
        else{
            $cekUser = $this->model("UserModel")->checkRegister($_POST['username'], $_POST['email']);
            if($cekUser == 0){
                $this->model("UserModel")->tambahDataUser($_POST);
                header('Location:http://localhost:8080/public/login/index');
            }
            else{
                header('Location:http://localhost:8080/public/register/index');
            }
        }
        
    }
}