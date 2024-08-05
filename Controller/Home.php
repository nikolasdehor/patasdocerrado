<?php

    Class Home extends Controller{
        public function index(){
            echo "Controller do Home";
            $this->view('home');
        }
    }
