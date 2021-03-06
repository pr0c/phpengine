<?php
    namespace Controller;

    class MainController extends Template {
        function __construct($action, $params = null) {
            $controller_action = $action;
            if(method_exists($this, $controller_action)) {
                $this->$action = $controller_action;
                if($params != null) $this->$action($params);
                else $this->$action();
            }
        }

        function showView($name, $addvars = null) {
            
            $this->render($this->getName(), $name, $addvars);
        }

        function getName() {
            return str_replace('Controller', '', get_class($this));
        }

        function useModel($modelname = null) {
            if($modelname == null) $modelname = $this->getName() . 'Model';
            else if(class_exists($modelname . 'Model')) $modelname = $modelname . 'Model'; 
            $this->model = new $modelname;
        }
    }