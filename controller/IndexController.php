<?php
    namespace Controller;

    class IndexController extends MainController {
        function index() {
            $vars = array(
                'content' => 'HELLO',
                'username' => 'Dear user'
            );
            $this->showView('index', $vars);
            $this->useModel('User');
            $user->getInfo();
        }
    }