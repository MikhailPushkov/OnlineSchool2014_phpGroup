<div id="containter">

<script>
    $(function() {
        $( "#dialog-3" ).dialog({
            autoOpen: false,
            hide: "size",
            show : "slide",
            buttons: {
                  Отмена: function() {
                    $(this).dialog("close");}
               }
        });
        $( "#opendial" ).click(function() {
            $( "#dialog-3" ).dialog( "open" );
        });
    
    });
</script>
<div id="dialog-3" class="registeredusers"  role="dialog" title="Полная информация">
                <div id="polnaya_inform">
                                           <label class="inf">Логин  <strong><span class='left'><?php echo $data->username ?></span></strong></label>
                                           <label class="inf">Фамилия  <strong><span class='left'><?php echo $data->f ?></span></strong> </label>
                                           <label class="inf">Имя <strong><span class='left'><?php echo $data->i ?></span></strong></strong></label>
                                           <label class="inf">Отчество<strong><span class='left'> <?php echo $data->o ?></span></strong></label>
                                           <label class="inf">email <strong><span class='left'><?php echo $data->email ?></span></strong></label>
                                           <label class="inf">Телефон <strong> <span class='left'><?php echo $data->phone ?></span></strong></label>
                </div>
</div>
    <div class="row">

        <div id="profil_left">

            <div class="well well-small center">

                <div class="inform">
                    <p>
                        <img src="<?php echo URL::base(); ?>img/passport.jpg" class="img-rounded">
                    </p>
                    <p>
                    <h5><?php echo $data->f; ?></h5>
                    </p>
                    <p>
                    <h5><?php echo $data->i; ?></h5>
                    </p>
                    <p>
                    <h5><?php echo $data->o; ?></h5>
                    </p>
                    <div class="btninform">
                        <input type="submit" id="opendial"  style="width: 300px;" name='rdbtn' class="buttonregistr" value="Полная информация">
                    </div>
                </div>

            </div>
        </div>
        <div id ='profil_right'>

            <div class="center">
             <script>
                        $(function() {
                            $( "#dialog-1" ).dialog({
                                autoOpen: false,
                                hide: "size",
                                show : "slide",
                                height: 200
                            });
                            $( "#openning" ).click(function() {
                                $( "#dialog-1" ).dialog( "open" );
                            });
                        });
            </script>
                    <div id="dialog-1" title="Открыть журнал">
                        <form  role="form" method="post" action="<?php echo URL::base(); ?>teacher/jurnal" name="form">

                            <div id="usertjur">

                                <div  class="top">
                                        <label class="align">Предмет  </label>
                                      <select class="cbx" onchange="document.getElementById('predmet').value=this.value;" style="margin-left: 50px !important;">
                                        <option value=""></option>
                                        <?php foreach ($dat as $item)
                                            echo '<option value="'.$item['artic'].'">'.$item['artic'].'</option>';
                                        ?>
                                        </select>
                                        <input name="predmet" id="predmet" type = "hidden"  value = ""/>
                                        <div class="topfm">
                                          <label class="align">Класс  </label>
                                        <select class="cbx" onchange="document.getElementById('clas').value=this.value;" size=1>
                                        <option value=""></option>
                                        <?php foreach ($dat as $item)
                                            echo '<option value="'.$item['num'].'">'.$item['num'].'</option>';
                                        ?>
                                    
                                        </select>
                                        <input name="clas" id="clas" type = "hidden"  value = ""/>
                                        </div>
                                </div>

                                <div class="rgstrcntr">
                                    <input type="submit" style="margin-top: 33px;" name='addbtn' class="buttonregistr" value="OK">

                                </div>
                            </div>
                        </form>
                    </div>

                 <script>
                        $(function() {
                            $( "#dialog-export" ).dialog({
                                autoOpen: false,
                                hide: "size",
                                show : "slide",
                                height: 200
                            });
                            $( "#openexport" ).click(function() {
                                $( "#dialog-export" ).dialog( "open" );
                            });
                        });
            </script>
                    <div id="dialog-export" title="Посмотреть отчет">
                        <form  role="form" method="post" action="<?php echo URL::base(); ?>teacher/export" name="form">

                            <div id="usertjur">

                                <div  class="top">
                                        <label class="align">Предмет  </label>
                                        <select class="cbx"  onchange="document.getElementById('predmet').value=this.value;" size=1>
                                            <option>A</option>
                                            <option>Б</option>
                                            <option>В</option>
                                            <option>Г</option>
                                            <option>Д</option>
                                        </select>
                                        <input name="predmet" id="predmet" type = "hidden"  value = ""/>

                                
                                        <div class="topfm">
                                          <label class="align">Класс  </label>
                                        <select  class="cbx"  style="margin-left:122px;" onchange="document.getElementById('combo').value=this.value;" size=1>
                                            <option>A</option>
                                            <option>Б</option>
                                            <option>В</option>
                                            <option>Г</option>
                                            <option>Д</option>
                                        </select>
                                        <input name="combo" id="combo" type = "hidden"  value = ""/>
                                        </div>
                                </div>

                                <div class="rgstrcntr">
                                    <input type="submit" style="margin-top: 33px;" name='addbtn' class="buttonregistr" value="OK">

                                </div>
                            </div>
                        </form>
                    </div>


                <div class="btncenter">
                     <input type="submit" id="openning"  style="font-size: 30px;width: 419px;" name='rdbtn' class="buttonregistr" value="Электронный журнал">
                        
                </div>
                <div class="btncenter">
                      <input type="submit" id="openexport"  style="font-size: 30px;width: 419px;" name='rdbtdasdn' class="buttonregistr" value="Отчет">
                     
                </div>
                 <div class="">
                     <a href="<?php echo URL::base(); ?>teacher/rasp" style="font-size: 30px;width: 365px;"   name='rdbtn' role='button' class="buttonregistr">Расписание</a>
                </div>

            </div>
        </div>
    </div>



</div>
</div>