<?php

    class Controller{
        public function view($nome){
            $arquivo = "View/".$nome.".view.php";
            if(file_exists($arquivo)){
                require $arquivo;
            }else{
                $arquivo = "View/_404.view.php";
                require $arquivo;
            }
        }
    }