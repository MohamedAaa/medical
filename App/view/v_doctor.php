<?php
if (intval(isset($_GET['id']))) {
    $showDoc = $show->getById('doctor', $_GET['id']);
} else {
    header('Location: index.php');
}
$_POST['id_doctor'] = $showDoc['id'];
?>
<div class='container' >
    <div class='row'>
        <div class='col-md-12 search' >    
            <img  class='img-responsive' src='App/assets/img/c01.gif'  />

            <div class='col-md-6' >   
                <span class='glyphicon glyphicon-user' >
                    <h3>الاسم<a href='?v=doctor&id=<?= $showDoc['id'] ?>'> :<?= $showDoc['name'] ?></a></h3>
                </span>
            </div>
            <div class='col-md-6' >
                <span class='glyphicon glyphicon-earphone' >
                    <h3>التليفون : <?= $showDoc['phone'] ?></h3>
                </span>
            </div>    
            <div class='col-md-6' >   
                <span class='glyphicon glyphicon-time' >
                    <h3>وقت العمل : <?= $showDoc['time'] ?></h3>
                </span>
            </div>
            <div class='col-md-6' >
                <span class='glyphicon glyphicon-briefcase' >
                    <h3>التخصص : محمد علاء</h3>
                </span>
            </div>
            <div class='col-md-6' >
                <span class='glyphicon glyphicon-map-marker' >
                    <h3>المكان : <?= $showDoc['name'] ?></h3>
                </span>
            </div>
            <?php
            if (@$_SESSION['name']) {
                echo "<form action='App/controller/c_addUser.php?id_doc={$showDoc['id']}' method='post'>
                        <div class='form-group'>
                            <label> اليوم</label>
                            <input type='date' name='day'  class='form-control'/>
                        </div>
                        <div class='form-group'>
                            <input type='submit' name='book' value='حجز'  class='form-control btn-primary'/>
                        </div>
                     </form>";
            } else {
                echo "
                    <div class='col-md-6' >
                        <span class='glyphicon glyphicon-map-marker' >
                            <h3>المكان : <a href='?v=addUser'>التسجيل فى الموقع للحجز</a></h3>
                        </span>
                    </div>";
            }
            ?>
        </div>   
    </div>
</div>   
