<?php

/*
 *
 * @author Mario
 */

class Display extends Database {

    private $tbname;
    private $id;
    private $city;
    private $spec;
    private $email;
    private $pass;

    public function __construct() {
        parent::__construct();
    }

    public function showAll($tbname) {

        $this->tbname = $tbname;

        $query = "SELECT * FROM $this->tbname ORDER BY `id` ASC";
        $sql = mysqli_query($this->con, $query);

        if (!$sql) {
            echo 'Cannot Search';
        } else {
            $rows = mysqli_num_rows($sql);

            if ($rows > 0) {
                for ($i = 0; $i < $rows; $i++) {

                    $data[$i] = mysqli_fetch_assoc($sql);
                }
                return $data;
            }
        }
    }

    public function getById($tbname, $id) {

        $this->tbname = $tbname;
        $this->id = $id;

        $query = "SELECT * FROM $this->tbname WHERE id =$this->id";
        $sql = mysqli_query($this->con, $query);

        if (!$sql) {
            echo 'Cannot Search';
        } else {
            $rows = mysqli_num_rows($sql);

            if ($rows > 0) {
                for ($i = 0; $i < $rows; $i++) {

                    $data = mysqli_fetch_assoc($sql);
                }
                return $data;
            }
        }
    }

    public function search($city, $spec) {

        $this->city = $city;
        $this->spec = $spec;

        $query = "SELECT * FROM `doctor` WHERE `id_city`=$this->city AND `id_specialty`= $this->spec";
        $sql = mysqli_query($this->con, $query);

        if (!$query) {

            echo 'Query Errors';
        } else {

            $rows = mysqli_num_rows($sql);

            if ($rows > 0) {

                for ($i = 0; $i < $rows; $i++) {
                    $data[$i] = mysqli_fetch_assoc($sql);
                }
                return $data;
            } else {
                return 'Not Found';
            }
        }
    }

    public function login($tbname, $email, $pass) {

        $this->email = $email;
        $this->pass = $pass;
        $this->tbname = $tbname;
        $query = "SELECT * FROM `$this->tbname` WHERE `email`='$this->email' AND `password` ='$this->pass' ";

        $sql = mysqli_query($this->con, $query);

        $rows = mysqli_num_rows($sql);

        if ($rows > 0) {
            session_start();
            $data = mysqli_fetch_assoc($sql);
            $_SESSION['name'] = $data['name'];
            $_SESSION['id_user'] = $data['id'];
            return TRUE;
            ;
        } else {
            echo 'Not Found ';
        }
    }

    public function book($tbname, $id) {

        $this->tbname = $tbname;
        $this->id = $id;

        $query = "SELECT * FROM $this->tbname WHERE id_user =$this->id";
        $sql = mysqli_query($this->con, $query);

        if (!$sql) {
            echo 'Cannot Search';
        } else {
            $rows = mysqli_num_rows($sql);

            if ($rows > 0) {
                for ($i = 0; $i < $rows; $i++) {

                    $data[$i] = mysqli_fetch_assoc($sql);
                }
                return $data;
            }
        }
    }

}
