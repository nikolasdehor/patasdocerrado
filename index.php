<?php
    session_start();

    define('ROOTPATH', __DIR__ . DIRECTORY_SEPARATOR);
    require 'Core/init.php';
    
    $app = new App;
    $app->carregarController();