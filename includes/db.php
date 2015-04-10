<?php
/*
 * Singleton wrapper for mysqli class
 * */


class db {
    private $_db;
    private static $mysqli = null;

    const HOST = HOST;
    const USER = USER;
    const PASSWORD = PASSWORD;
    const BASE_NAME = BASE_NAME;

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

    public function query($string) {
        return self::$mysqli->query($string);
    }

    public function getResult($query) {
        $rows = array();
        $row = null;
        do {
            if (is_array($row)) $rows[] = $row;
        } while ($row = $query->fetch_assoc());
        return $rows;
    }
}