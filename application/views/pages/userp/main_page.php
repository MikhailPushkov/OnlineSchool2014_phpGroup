<div id="containter">

<script>
    $(function() {
        $( "#dialog-4" ).dialog({
            autoOpen: false,
            hide: "size",
            show : "slide",
            buttons: {
                  Отмена: function() {
                    $(this).dialog("close");}
               }
        });
        $( "#opndial" ).click(function() {
            $( "#dialog-4" ).dialog( "open" );
        });
    
    });
</script>
<div id="dialog-4" class="registeredusers"  role="dialog" title="Полная информация">
                <div id="polnaya_inform">
                                           <label class="inf">Логин  <strong><span class='left'><?php echo $data->username ?></span></strong></label>
                                           <label class="inf">Фамилия  <strong><span class='left'><?php echo $data->f ?></span></strong> </label>
                                           <label class="inf">Имя <strong><span class='left'><?php echo $data->i ?></span></strong></strong></label>
                                           <label class="inf">Отчество<strong><span class='left'> <?php echo $data->o ?></span></strong></label>
                                           <label class="inf">Дата рождения <strong> <span class='left'><?php echo $data->datebirth ?></span></strong></label>
                                           <label class="inf">Адресс <strong><span class='left'><?php echo $data->address ?></span></strong></label>
                                           <label class="inf">Класс <strong> <span class='left'><?php echo $data->class ?></span></strong></label>
                                         
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
                                <input type="submit" id="opndial"  style="width: 300px;" name='rdbtn' class="buttonregistr" value="Полная информация">
                            </div>
                        </div>

                    </div>
             </div>
        <div id ='profil_right'>


            <div class="center">

                        <div class="btncenter">
                          <input type="submit"  style="font-size: 30px;height: 100px;width: 365px;"   name='rdbtn' class="buttonregistr" value="Дневник">
                        </div>


                        <div class="">
                          <input type="submit"  style="font-size: 30px;height: 100px;width: 365px;"  name='rdbtn' class="buttonregistr" value="Рейтинг усеваемости">
                        </div>
            </div>
            </div>
        </div>



    </div>
</div>