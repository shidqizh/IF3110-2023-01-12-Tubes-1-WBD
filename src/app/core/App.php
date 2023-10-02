<?php

class App{
    // public/<controller>/<method>/:<params>

    //defaultnya    
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        //bagi url agar dapat memisahkan controller, method, dan parameternya
        $url = $this->parseURL();

        // cek controller, ada atau tidak. jika tidak akan memakai default
        if(file_exists('../app/controller/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controller/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        // cek method, ada atau tidak. jika tidak akan memakai default
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // cek paramter, ada atau tidak. jika tidak akan memakai default
        if(!empty($url)){
            $this->params = array_values($url);
        }

        // run semua
        call_user_func_array([$this->controller, $this->method], $this->params);
         
    }

    //fungi untuk memecah url menjadi bbrp bagian
    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return [];
    }
}