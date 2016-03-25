<?php

/*
 * Connection to Database 
 * @author Mario
 */

class Database {

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'medical';
    protected $con;

    public function __construct() {
        $this->connection();
    }

    protected function connection() {

        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);

        if (mysqli_connect_errno($this->con)) {
            echo 'Cannot Connection' . mysqli_connect_errno();
        } else {
            return $this->con;
        }
    }

}
