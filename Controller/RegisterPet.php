<?php

    class RegisterPet extends Controller{
        public function index(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $usuario = new Usuario;
                $_POST['tipousuario_ID'] = 1;
                unset($_POST['confirmar-senha']);
                $usuario->insert($_POST);
                header("Location:index.php");
            }
            $cidades = new Cidade;
            $data = $cidades->select();
            $_POST = "";
            $this->view('registerPet', $data);
        }
    }
