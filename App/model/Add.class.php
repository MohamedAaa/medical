<?php

/*
 * Class Add to Database
 * @author Mario
 */

class Add extends Database {

    private $data;
    private $tbname;
    private $cxn;

    public function __construct($data, $tbname) {
        parent::__construct();
        $this->data = $data;
        $this->tbname = $tbname;
        $this->add($data);
    }

    private function add($data) {

        if (is_array($data)) {
            foreach ($data as $k => $v) {
                $tables[] = $k;
                $values[] = $v;
            }

            $table = implode($tables, ',');
            $value = '"' . implode($values, '","') . '"';

            $query = "INSERT INTO $this->tbname ($table) VALUES ($value) ";

            $sql = mysqli_query($this->con, $query);

            if (!$sql) {
                echo 'Cannot Insert';
            }
        } else {
            echo 'Data must be an arary! ';
        }
    }

}
