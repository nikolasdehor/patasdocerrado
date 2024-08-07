<?php

    class Logout extends Controller{
        public function index(){
            if(!empty($_SESSION['USUARIO'])){
                unset($_SESSION['USUARIO']);
            }
            header("Location:index.php");
        }
    }
