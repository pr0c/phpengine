<?php
    class Core_Router extends Core_Runnable {
        function __construct() {
            $this->getRoute();
        }   

        function getRoute() {
            global $config;
            $this->routs = explode('/', $_SERVER['REQUEST_URI']);
            if($this->routs[2] == $config['router']['modules'] || $this->routs[3] == null) {
                $this->module = $this->routs[3];
            }
            if($this->routs[4] != null) {
                $this->action = $this->routs[4];
            }
            $this->route();
        }

        function route() {
            parent::action(array($this->module, $this->action));
        }
    }
    