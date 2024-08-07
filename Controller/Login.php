<?php

    class Login extends Controller{
        public function index(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $usuario = new Usuario;
                if($usuario->validar($_POST)){
                    $_SESSION['USUARIO'] = $usuario->retornarPrimeiro($_POST);
                    header("Location:index.php");
                }
            }
            $this->view('login');
        }
    }
