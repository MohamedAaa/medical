<?php
//`name`, `email`, `password`,
// `id_specialty`, `id_city`, `id_degree`, `title`, `telephone`, `phone`, `website`, `time`, `info` 
if(@isset($_POST)){
    
        include '../model/Database.class.php';
        include '../model/Display.class.php';
        include '../model/Add.class.php'; 
        
    if(isset($_POST['add'])){
        $data['name']   = $_POST['name'];
        $data['email']   = $_POST['email'];
        $data['password']   = $_POST['password'];
        @$data['id_specialty']   = @$_POST['id_specialty'];
        $data['id_city']   = $_POST['id_city'];
        $data['title']   = $_POST['title'];
        $data['telephone']   = $_POST['telephone'];
        $data['phone']   = $_POST['phone'];
        $data['website']   = $_POST['website'];
        $data['time']   = $_POST['time'];

        $addDoctor = new Add($data,'doctor');

        if($addDoctor){
            echo 'Add Done';
        }else{
            echo 'No Add';
        }
    }
        
}else{
    header('Location: ../../index.php');
}
