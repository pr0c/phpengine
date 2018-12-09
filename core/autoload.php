<?php
    spl_autoload_register('autoload');
    
    function autoload($classname) {
        $dir = '';
        $route = strtolower($classname);
        $prefix = explode('_', $route);
        if($prefix[0] == 'core') $dir = '';
        else if($prefix[0] == 'lib') $dir = 'lib/';
        else {
            if(strpos($classname, 'Model') != false) $dir = 'model/';
            if(strpos($classname, 'Controller') != false) $dir = 'controller/';
            $classname[0] = strtoupper($classname[0]);
        }
        require_once $dir.$classname.'.php';
    }