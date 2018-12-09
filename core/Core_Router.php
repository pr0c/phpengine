<?php
    class Core_Router extends Core_Runnable {
        function __construct() {
            $this->getRoute();
        }   

        function getRoute() {
            global $config;
            $this->routs = explode('/', $_SERVER['REQUEST_URI']);
            if(count($this->routs) > 2) {
                if($this->routs[2] == $config['router']['modules'] || $this->routs[3] == null) {
                    $this->module = $this->routs[3];
                }
                if($this->routs[4] != null) {
                    $this->action = $this->routs[4];
                }
            }
            else {            
                $this->module = $config['router']['main_module'];
                $this->action = $config['router']['main_action'];
            }
            $this->route();
        }

        function route() {
            $this->action(array($this->module, $this->action));
        }
    }
    