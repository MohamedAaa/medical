<?php
session_start();

include 'App/model/Database.class.php';
include 'App/model/Display.class.php';
include 'App/model/Delete.class.php';
    
    $show           = new Display();
    $showSpecialty  = $show->showAll('specialty');
    $showCity       = $show->showAll('city');
    
    if(isset($_POST['deleteBook'])){
        
       $id      = $_GET['delete'];
       $delete  = new Delete('booking', $id);
       
    }
include 'App/view/header.php';
?>
        <div class="container" style="margin-bottom: 15">
            <div class="row">    
                
                <a href="?v=search" class="btn btn-info"> ابحث عن طبيب</a>
                <?php
                if(isset($_SESSION['name'])){
                    echo "<a href='?v=profileUser' class='btn btn-info' >{$_SESSION['name']}</a>
                          <a href='?v=logout' class='btn btn-info clearfix' style='float:left;'>الخروج</a>";
                }else{
                    echo '<a href="?v=addDoctor" class="btn btn-info">تسجيل طبيب</a> <a href="?v=addUser" class="btn btn-info"> التسجيل فى الموقع </a>';
                }
                ?>
            </div>
        </div>
<?php
            $url = @$_GET['v'];
            if (isset($url)){
                include 'App/view/v_'.$url.'.php';
            }  else {
                echo 'مرحبا';
            }
include 'App/view/footer.php';