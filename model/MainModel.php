<?php
    class MainModel extends Lib_Db {
        function __construct() {
            $this->connect();
        }

        function __destruct() {
            $this->disconnect();
        }
    }