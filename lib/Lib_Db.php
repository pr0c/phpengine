<?php
    class Lib_Db {
        function connect() {
            global $config;
            $this->connection = new mysqli($config['db']['host'], $config['db']['user'], $config['db']['password'], $config['db']['db_name']);
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

        function insert() {
            $this->connection->query();
        }
    }