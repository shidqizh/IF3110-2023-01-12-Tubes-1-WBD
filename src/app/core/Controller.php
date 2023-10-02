<?php

class Controller{
    //fungsi untk menampilkan view
    public function view($view, $data=[]){
        require_once '../app/view/' . $view . '.php';
    }

    //fungsi untuk load model
    public function model($model){
        require_once '../app/model/' . $model . '.php';
        return new $model;  
    }

}