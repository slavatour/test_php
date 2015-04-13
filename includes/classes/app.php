<?php
require_once 'includes/classes/db.php';

class app {
    private $_app = null;
    private $_db = null;
    private $create_db_string = 'CREATE DATABASE test_db;';
    private $create_table_string = 'CREATE TABLE content(
                                        id int NOT NULL AUTO_INCREMENT,
                                        photo varchar(255) NOT NULL,
                                        name varchar(255) NOT NULL,
                                        description varchar(255) NOT NULL,
                                        category varchar(255) NOT NULL,
                                        price int NOT NULL);';

    const HOST = HOST;
    const USER = USER;
    const PASSWORD = PASSWORD;
    const BASE_NAME = BASE_NAME;

    function __construct() {
        $this->_db = db::getConnection();
        $this->initDataBase();
    }

    private function initDataBase() {

    }
}