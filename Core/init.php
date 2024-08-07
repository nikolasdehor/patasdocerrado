<?php
    spl_autoload_register(function($classname){
        require $filename = "Model/".ucfirst($classname).".php";
    });
    
    require 'config.php';
    require 'functions.php';
    require 'Database.php';
    require 'Controller.php';
    require 'Model.php';
    require 'App.php';