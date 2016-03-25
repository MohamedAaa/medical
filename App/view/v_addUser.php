<?php
if(isset($_SESSION['name'])){
    header('Location : ../../index.php');
    exit();
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>تسجيل الدخول</h3>
            <form action="App/controller/c_addUser.php" method="post">
                <div class="form-group">
                    <label>البريد الالكترونى</label>
                    <input type="text" name="email"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label>كلمة المرور</label>
                    <input type="text" name="password"  class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="new" value="دخول"  class="form-control btn-primary"/>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h3>تسجيل عضو جديد</h3>
            <form action="App/controller/c_addUser.php" method="post">
                <div class="form-group">
                    <label>الاسم</label>
                    <input type="text" name="name"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label>البريد الالكترونى</label>
                    <input type="text" name="email"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label>كلمة المرور</label>
                    <input type="text" name="password"  class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="add" value="تسجيل"  class="form-control btn-primary"/>
                </div>
            </form>
        </div>
    </div>
</div>