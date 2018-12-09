<?php
    $config = array(
        'site' => array(
            'title' => 'My CMS',
            'version' => '1',
            'author' => 'Vladyslav Yevtiukhin',
            'main_style' => 'view/templator/style/style.css'
        ),
        'db' => array(
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'db_name' => 'phpengine'
        ),
        'router' => array(
            'main_module' => 'index',
            'main_action' => 'index',
            'modules' => 'modules' //modules directory
        )
    );