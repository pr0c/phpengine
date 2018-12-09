<?php
    class MainModel extends Lib_Db {
        function __construct() {
            $this->connect();
        }

        function insertData(array $info) {
            $query = "";
            for($i = 0; $i < count($info); $i++) {

            }
        }

        function __destruct() {
            $this->disconnect();
        }
    }