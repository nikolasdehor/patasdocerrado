<?php

    class PerfilAnimal extends Controller{
        public function index(){
            if(empty($_SESSION)){
                $data['usuario'] = 'Usuário';
            }else{
                $data['usuario'] = $_SESSION['USUARIO'];
            }
            $this->view('perfilanimal', $data);
        }
    }
