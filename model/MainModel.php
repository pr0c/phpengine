<?php
    class MainModel extends Lib_Db {
        private $info = array();

        function __construct() {
            $this->connect();
        }

        function insertData(array $info) {
            for($i = 0; $i < count($info); $i++) {
                
            }
        }

        function __destruct() {
            $this->disconnect();
        }
    }