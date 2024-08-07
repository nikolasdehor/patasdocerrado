<?php

    class App{
        private $controller = "Home";
        private $method = "index";

        private function separarURL(){
            $URL = $_GET['url'] ?? 'home';
            $URL = explode("/", trim($URL, "/"));
            return $URL;
        }
        public function carregarController(){
            $URL = $this->separarURL();
            $arquivo = "Controller/".ucfirst($URL[0]).".php";
            if(file_exists($arquivo)){
                require $arquivo;
                $this->controller = ucfirst($URL[0]);
            }else{
                $arquivo = "Controller/_404.php";
                require $arquivo;
                $this->controller = "_404";
            }
            $controller = new $this->controller;

            if(!empty($URL[1])){
                if(method_exists($controller, $URL[1])){
                    $this->method = $URL[1];
                }
            }
            call_user_func_array([$controller, $this->method], $URL);
        }
    }