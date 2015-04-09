<?php

class db {
    private $_db;
    private static $mysqli = null;

    const HOST = 'localhost';
    const USER = 'test-user';
    const PASSWORD = 'fCRyyZu7HC9dX4fc';
    const BASE_NAME = 'test_db';

    private function __construct () {
        $ob_mysqli = new mysqli(self::HOST, self::USER, self::PASSWORD, self::BASE_NAME);
        if(!$ob_mysqli->connect_error) {
            $this->_db = $ob_mysqli;
            $this->_db->query("SET NAMES 'utf8'");
            return $this->_db;
        }
        else {
            exit('No connect to server!');
        }
    }

    public function getConnection() {
        if(self::$mysqli == null) {
            $db = new db();
            self::$mysqli = $db->_db;
        }
        return self::$mysqli;
    }
}