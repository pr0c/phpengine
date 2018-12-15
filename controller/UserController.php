<?php
    namespace Controller;

    class UserController extends MainController {
        function add() {
            $this->showView('add');
            $this->useModel();
        }
    }