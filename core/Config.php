<?php
    namespace Core;
    
    class Config {
        static $config = array(
            'site' => array(
                'title' => 'My CMS',
                'version' => '1',
                'author' => 'Vladyslav Yevtiukhin'
            ),
            'style' => array(
                'template' => 'default',
                'main_style' => 'style.css'
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

        static function get(array $option) {
            return isset(self::$config[$option[0]][$option[1]]) ? self::$config[$option[0]][$option[1]] : null;
        }
        static function print(array $option) {
            echo isset(self::$config[$option[0]][$option[1]]) ? self::$config[$option[0]][$option[1]] : null;
        }
    }
    