<?php
session_start();
//`name`, `email`, `password`,
if(!empty($_POST)){
        include '../model/Database.class.php';
        include '../model/Add.class.php'; 
        include '../model/Display.class.php'; 
        
    if(isset($_POST['add'])){
        $data['name']   = @$_POST['name'];
        $data['email']   = $_POST['email'];
        $data['password']   = $_POST['password'];

        $addUser = new Add($data,'user');

        if($addUser){
            session_start();
            $_SESSION['name'] = $data['name'];
        }else{
            echo 'No Add';
        }
    }
    if(isset($_POST['new'])){
        
        $email   = $_POST['email'];
        $pass    = $_POST['password'];

        $user = new Display();
        $login = $user->login('user',$email, $pass);
        if($login == TRUE){
            header('Location: ../../index.php');
        }
    }
    if(isset($_POST['book'])){
        
        $data['id_doctor']  = @$_GET['id_doc'] ;
        $data['id_user']    = @$_SESSION['id_user'];
        $data['book']       = $_POST['day'];
        $book = new Add($data,'booking');
        
        if($book){
            echo 'Done Bookimg </br> <a href="http://localhost/Medical/index.php?v=profileUser">  back </a>';
        }
    }
    
}else{
    header('Location: ../../index.php');
}