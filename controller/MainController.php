<?php
    class MainController {
        function __construct($action, $params = null) {
            $controller_action = $action;
            if(method_exists($this, $controller_action)) {
                $this->$action = $controller_action;
                if($params != null) $this->$action($params);
                else $this->$action();
            }
        }

        function showView() {
            
        }
    }