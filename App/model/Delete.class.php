<?php

/*
 *
 * @author Mario
 */
class Delete extends Database{
    //put your code here
    private $tbname;
    private $id;
    public function __construct($tbname,$id) {
        parent::__construct();
        
        $this->tbname = $tbname;
        $this->id     = $id;
        
        $this->delete();
        
    }
    private function delete(){
        
        $query = "DELETE FROM $this->tbname WHERE `id` =$this->id";
        
        $sql   = mysqli_query($this->con, $query);
        
        if(!$sql){
            echo 'Error Delete ! ';
        }
    }
}
