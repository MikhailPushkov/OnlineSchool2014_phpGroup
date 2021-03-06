
<style>

    #commentForm {
        width: 500px;
    }
    #commentForm label {
        width: 250px;
    }
    #commentForm label.error,
    #commentForm input.submit {
        margin-left: 253px;
    }
    #signupForm {
        width: 670px;
    }
    #signupForm label.error {
        margin-right: -145%;
        float: right;
        display: inline;

    }
    #newsletter_topics label.error {
        display: none;
        margin-left: 103px;
    }
</style>
<script>
    $().ready(function() {

        $("#signupForm").validate({
            rules: {
                f: "required",
                i: "required",
                o: {
                    required: true,
                    minlength: 3
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                datebirth:{required:true},

                login:{
                    required:true,
                    minlength:2
                },
                phone:{required:true}
            },
            messages: {
                f: "Please enter your firstname",
                i: "Please enter your lastname",
                o: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email:{required: "Please enter a valid email address"}

            }
        });

        // propose username by combining first- and lastname
        $("#i").focus(function() {
            var f = $("#f").val();
            var o = $("#o").val();
            if (f && o && !this.value) {
                this.value = f + "." + o;
            }
        });

        //code to hide topic selection, disable for demo
    });
</script>





<div class="container">
    <div class="row">
        <div id="admin_addus">
            <div class="span8">
                <form class="form-horizontal"  method="post" action="<?php echo URL::base(); ?>admin/upusert" id="signupForm"  role="form">
                    <input type="hidden" name="id" value="<?php echo $data->id;?>"/>
                    <label class="align">Логин  <input type="text" value="<?php echo $data->username; ?>" name="username" class="form-control right" id="username" placeholder=" "></label>
                    <label class="align">Пароль  <input type="password" value="<?php echo $data->password; ?>" name="password" class="form-control right" id="password" placeholder=" "></label>
                    <label class="align">Подтвердите пароль  <input type="password" value="" name="disabledInput" class="form-control right" id="confirm_password" placeholder=" "></label>
                    <label class="align">Фамилия   <input type="text" name="f" value="<?php echo $data->f; ?>"  class="form-control right" id="f" placeholder=" "></label>
                    <label class="align">Имя  <input type="text" name="i" value="<?php echo $data->i; ?>" class="form-control right" id="i" placeholder=" "></label>
                    <label class="align">Отчество <input type="text" name="o" value="<?php echo $data->o; ?>" class="form-control right" id="o" placeholder=" "></label>
                    <label class="align">email  <input type="text" name="email" value="<?php echo $data->email; ?>" class="form-control right" id="email" placeholder=" "></label>
                    <label class="align">Телефон  <input type="text" name="phone" value="<?php echo $data->phone; ?>" class="form-control right"  placeholder=" "></label>
                    <label class="align">Предмет  <a href="#" id="BtnPred" role="button" data-toggle="modal"><img class="addphoto" src="<?php echo URL::base(); ?>./img/add.png"/></a></label>
                        <table id="predmet"  class="table" style="margin-left: auto;width: 200px;margin-top: -20px;">
                            <thead>
                            <td>Предмет</td><td hidden="true">ИД</td><td>Удалить</td></th>
                            </thead>
                            <tbody>
                            <?php
                            //foreach ($datas as $data)
                            //echo '<tr><td>'.$data->fio.'</td><td hidden="true" class="id">'.$data->id.'</td><td>'.Form::button('delete', 'X', array('class'=>'btnDelete')).'</td></tr>'
                            ?>
                            </tbody>
                        </table>

                    <div class="center">

                        <input type="submit"  name='rdbtn' class="buttonregistr" value="Сохранить">
                        <input type="button"  onclick="location.href='<?php echo URL::base() ?>admin'"  name='redirect' class="buttonregistr" value="Отмена">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="" hidden="true" id="myModalPred" tabindex="-1">
        <?php echo
            Form::open(NULL, array('class'=>'', 'id'=>'')).
            Form::label('lbl', 'Предмет', array('class'=>'align'))?>
        <select class="form-control" onclick="document.getElementById('article').value=this.value;" size=1>
            <option value="Информатика">Информатика</option>
            <option value="Архитектура">Архитектура</option>
            <option value="ИС">ИС</option>
            <option value="Управление Данными">Управление Данными</option>
            <option value="ТИПиС">ТИПиС</option>
            <option value="Программирование">Программирование</option>
        </select>
        <input name="article" id="article" type = "hidden"  value = ""/>
        <?php  Form::close();?>

    </div>
</div>