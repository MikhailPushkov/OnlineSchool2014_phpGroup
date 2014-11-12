        <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div  class="modal-dialog ">
                <div class="modal-content">

                    <form  role="form" method="post" action="addingus" name="form">

                        <div id="registeruser">

                            <div class="header">

                                <h1>Добавить нового пользователя<h1>
                            </div>
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
            </div>
        </div>


        <div class="alala">
            <div class="registeredusers">

                <input  type="button" data-toggle="modal" data-target="#myModal" style=" width: 20% !important;margin-left: 7%; background-color: #ffffff !important;" class="buttonregistr" value="Добавить">
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
                    <tr>
                        <th>Логин</th>
                        <th>E-mail</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Роль</th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/edit.png"></a></th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/del.png"></a></th>
                    </tr>
                    <tr>
                        <th>Логин</th>
                        <th>E-mail</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Роль</th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/edit.png"></a></th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/del.png"></a></th>
                    </tr>
                    <tr>
                        <th>Логин</th>
                        <th>E-mail</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Роль</th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/edit.png"></a></th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/del.png"></a></th>
                    </tr>
                    <tr>
                        <th>Логин</th>
                        <th>E-mail</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Роль</th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/edit.png"></a></th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/del.png"></a></th>
                    </tr>
                    <tr>
                        <th>Логин</th>
                        <th>E-mail</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Роль</th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/edit.png"></a></th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/del.png"></a></th>
                    </tr>
                    <tr>
                        <th>Логин</th>
                        <th>E-mail</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Роль</th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/edit.png"></a></th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/del.png"></a></th>
                    </tr>
                    <tr>
                        <th>Логин</th>
                        <th>E-mail</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Роль</th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/edit.png"></a></th>
                        <th><a href=""><img src="<?php echo URL::base(); ?>./img/del.png"></a></th>
                    </tr>
                </table>
            </div>
        </div>
