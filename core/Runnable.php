<?php
    namespace Core;
    
    class Runnable extends Application {

        function action($act) {
            //print_r($act);
            $act[0] = $act[0].'Controller';
            $controller = new $act[0]($act[1]);
        }
    }