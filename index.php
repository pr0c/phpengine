<?php
    require_once 'core/autoload.php';
    //$config = new Core_Config();
    echo Core_Config::get(['site', 'title']);
    $router = new Core_Router();

