<?php
    session_start();

    require 'Core/init.php';
    
    $app = new App;
    $app->carregarController();