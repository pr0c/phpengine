<?php
    spl_autoload_register('autoload');

    function autoload($classname) {
        $parts = explode('\\', $classname);
        $parts[0][0] = strtolower($parts[0][0]);
        require_once $parts[0].'/'.$parts[1].'.php';
    }
    
    /*function autoload($classname) {
        $dir = '';
        $route = strtolower($classname);
        $prefix = explode('_', $route);
        if($prefix[0] == 'core') $dir = '';
        else if($prefix[0] == 'lib') $dir = 'lib/'.$prefix[1].'/';
        else {
            if(strpos($classname, 'Model') != false) $dir = 'model/';
            else if(strpos($classname, 'Controller') != false) $dir = 'controller/';
            else $dir = 'class/';
            $classname[0] = strtoupper($classname[0]);
        }
        require_once $dir.$classname.'.php';
    }*/