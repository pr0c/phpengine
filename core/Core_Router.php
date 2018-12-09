<?php
    class Core_Router extends Core_Runnable {
        function __construct() {
            $this->getRoute();
        }   

        function getRoute() {
            $this->routs = explode('/', $_SERVER['REQUEST_URI']);
            if(count($this->routs) > 2) {
                if($this->routs[2] == Core_Config::get(['router', 'modules']) || $this->routs[3] == null) {
                    $this->module = $this->routs[3];
                }
                if($this->routs[4] != null) {
                    $this->action = $this->routs[4];
                }
            }
            else {            
                $this->module = Core_Config::get(['router', 'main_module']);
                $this->action = Core_Config::get(['router', 'main_action']);
            }
            $this->route();
        }

        function route() {
            $this->action(array($this->module, $this->action));
        }
    }
    