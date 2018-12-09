<?php
    class Lib_Db {
        function connect() {
            global $config;
            $this->connection = new mysqli(Core_Config::get(['db', 'host']), Core_Config::get(['db', 'user']), Core_Config::get(['db', 'password']), Core_Config::get(['db', 'db_name']));
            if($this->connection->connect_errno) {
                die('Could not connected to MySQL database: ('.$this->connection->connect_errno.') '.$this->connection->connect_error);
            }
        }

        function disconnect() {
            if(property_exists($this, 'connection')) $this->connection->close();
        }

        function select() {
            //$this->connection->query
        }

        function insert($query_string) {
            $this->connection->query($query_string);
        }
    }