<?php

    if(!isset($_SESSION['name'])){
        header('Location: index.php');
        exit();
    }   
    $book       = $show->book('booking',$_SESSION['id_user']);    
    

?>
        <div class='container' >
            <div class='row'>
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>الدكتور</th>
                                <th>الميعاد</th>
                                <th>تعديل</th>
                                <th>حذف</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i=0;
                                for(@$i; @$i< count($book); @$i++){
                                    $doc = $show->getById('doctor', $book[@$i]['id_doctor']);
                                    echo "
                                    <tr>
                                        <td><a style='color:black' href='?v=doctor&id={$doc['id']}'>{$doc['name']}</a></td>
                                        <td>{$book[$i]['book']}</td>
                                        <td ><a href=''class='btn btn-primary' >نعديل</a></td>
                                        <td >
                                            <form action='?delete={$book[$i]['id']}' method='post'>
                                                <input type='submit' value='حذف' name='deleteBook' class='btn btn-danger' />
                                            </form>
                                        </td>
                                    </tr>
                                ";
                                }
                            ?>  
                        </tbody>      
                    </table>
                </div>
            </div>
        </div>   
