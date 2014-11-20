<script>
    $(function() {
        $( "#dialog-2" ).dialog({
            autoOpen: false,
            hide: "size",
            show : "slide"
        });
        $( "#opener" ).click(function() {
            $( "#dialog-2" ).dialog( "open" );
        });
    });
</script>
<div id="dialog-2" class="registeredusers"  role="dialog" title="Добавить нового пользователя">

    <form  role="form" method="post" action="addingus" name="form">

        <div id="registeruser">
            <div id="cbxuregister">

                <div class="chk"><label class="radio-inline" ><input type="radio" name="radio" value="teach" > <span class="kalapaarida">Ученик </span></label></div>
                <div class="chkb"><label class="radio-inline"><input type="radio" name="radio" value="pupil" ><span class="kalapaarida">Учитель</span></label></div>
            </div>
            <div class="rgstrcntr">
                <input type="submit"  name='rdbtn' class="buttonregistr" value="Создать">
            </div>
        </div>
    </form>

</div>



            <div class="alala">

                <div class="registeredusers">


                    <button id="opener" style="
                   width: 20% !important;margin-left: 7%; background-color: #ffffff !important;" class="buttonregistr">Добавить</button>
                    <a href="http://localhost/new/admin/" id="" style="
    color: #005580 !important;
    font-size: 25px bold;
    float: right;
" >Перейти на главную страницу админа</a>


                    <label class="align" style="margin-top: 20px;">Поиск:  <input type="search" style="width: 30%;"  class="form-control right" id="" placeholder=" "></label>
                    <table class="table table-bordered table-hover tableregistered">
                        <tr class="tableheader">

                            <th role="button">Логин</th>
                            <th>E-mail</th>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отчество</th>
                            <th>Роль</th>
                            <th width="20px"></th>
                            <th width="20px"></th>
                        </tr>
                        <?php foreach($data as $item):?>
                            <tr>
                                <th><?php echo $item['login']; ?></th>
                                <th><?php echo $item['email']; ?></th>
                                <th><?php echo $item['f']; ?></th>
                                <th><?php echo $item['i']; ?></th>
                                <th><?php echo $item['o']; ?></th>
                                <th><?php echo $item['table_role']; ?></th>
                                <th><a href="<?php echo URL::base(); ?>admin/edit/<?php echo $item['id'];?>"><img src="<?php echo URL::base(); ?>./img/edit.png"></a></th>
                                <th><a href="<?php echo URL::base(); ?>admin/delusers/<?php echo $item['id'];?>"><img src="<?php echo URL::base(); ?>./img/del.png"></a></th>
                            </tr>
                        <?php endforeach; ?>

                    </table>
                </div>
            </div>
