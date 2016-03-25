<!--
`name`, `email`, `password`,`id_specialty`, `id_city`, `id_degree`, `title`, `telephone`, `phone`, `website`, `time`, `info`
-->  
<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="App/controller/c_addDoctor.php" method="post">
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
                            <label>العنوان</label>
                            <input type="text" name="title"  class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>التليفون</label>
                            <input type="text" name="telephone"  class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>الموبايل</label>
                            <input type="text" name="phone"  class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>الموقع الالكترونى</label>
                            <input type="text" name="website"  class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>اوقات العمل </label>
                            <input type="text" name="time"  class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label> التخصص </label>
                            <select name='id_specialty' class='form-control'>
                                <?php for($i=0 ; $i < count($showSpecialty) ; $i++){
                                    echo "<option value='{$showSpecialty[$i]['id']}'>{$showSpecialty[$i]['name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>معلومات اضافية</label>
                            <textarea  name="info"class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>المنطقة</label>
                            <select name="id_city" class="form-control">
                                <?php for($i=0 ; $i < count($showCity) ; $i++){
                                    echo "<option value='{$showCity[$i]['id']}'>{$showCity[$i]['name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="add" value="أضافة"  class="form-control btn-primary"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>