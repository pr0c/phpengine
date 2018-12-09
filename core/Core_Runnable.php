<?php
    class Core_Runnable extends Core_Application {
        function __construct() {
            
        }

        function action($act) {
            //print_r($act);
            $act[0] = $act[0].'Controller';
            $controller = new $act[0]($act[1]);
        }
    }