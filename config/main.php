<?php
    $config = array(
        'site' => array(
            'title' => 'My CMS',
            'version' => '1',
            'author' => 'Vladyslav Yevtiukhin'
        ),
        'db' => array(
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'db_name' => 'cms'
        ),
        'router' => array(
            'main_action' => 'index',
            'modules' => 'modules' //modules directory
        )
    );