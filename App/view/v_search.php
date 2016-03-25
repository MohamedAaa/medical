<?php
    if(isset($_POST['search'])){
        if(!@$_POST['id_specialty']){
            $specialty   = 5;
        }
        $specialty   = @$_POST['id_specialty'];
        $city        = @$_POST['id_city'];

        $show = new Display();
        $search =$show->search($specialty,$city);
    
//            echo '<pre>';
//            print_r($search);
//            echo '</pre>';     
    }

?>
<div class='container'>
    <div class='row'>
        <div class='col-md-6'>
            <form action='' method='post'>
                <div class='form-group'>
                    <label> التخصص </label>
                    <select name='id_specialty' class='form-control'>
                        <?php for($i=0 ; $i < count($showSpecialty) ; $i++){
                            echo "<option value='{$showSpecialty[$i]['id']}'>{$showSpecialty[$i]['name']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class='form-group'>
                    <label>المنطقة</label>
                    <select name='id_city' class='form-control'>
                        <?php for($i=0 ; $i < count($showCity) ; $i++){
                            echo "<option value='{$showCity[$i]['id']}'>{$showCity[$i]['name']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class='form-group'>
                    <input type='submit' name='search' value='بحث'  class='form-control btn-primary'/>
                </div>
            </form>
        </div>
    </div>
</div>

<div class='container'>
    <div class='row'>
            <?php
            if(count(@$search) > 0){
                for($i=0 ; $i < count($search) ; $i++){
                echo"
                <div class='col-md-6 search' >    
                    <img  class='img-responsive' src='App/assets/img/c01.gif'  />
            
                    <div class='col-md-6' >   
                        <span class='glyphicon glyphicon-user' >
                            <h3>الاسم<a href='?v=doctor&id={$search[$i]['id']}'> :{$search[$i]['name']}</a></h3>
                        </span>
                    </div>
                    <div class='col-md-6' >
                        <span class='glyphicon glyphicon-earphone' >
                            <h3>التليفون : {$search[$i]['phone']}</h3>
                        </span>
                    </div>    
                    <div class='col-md-6' >   
                        <span class='glyphicon glyphicon-time' >
                            <h3>وقت العمل : {$search[$i]['time']}</h3>
                        </span>
                    </div>
                    <div class='col-md-6' >
                        <span class='glyphicon glyphicon-briefcase' >
                            <h3>التخصص : محمد علاء</h3>
                        </span>
                    </div>
                    <div class='col-md-6' >
                        <span class='glyphicon glyphicon-map-marker' >
                            <h3>المكان : {$showSpecialty[$specialty]['name']}</h3>
                        </span>
                    </div>
                </div>"
                ;
            }
            }else{
                
                echo 'Not found';
            }
         
            ?>    
    </div>
</div>            
