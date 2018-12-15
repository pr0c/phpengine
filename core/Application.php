<?php
    namespace Core;
    
    class Application {
        function __construct() {
            $this->router = new Router();
            $this->tpl = new Template();
        }
    }