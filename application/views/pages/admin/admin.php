
                    <script>
                        $(function() {
                            $( "#dialog-1" ).dialog({
                                autoOpen: false,
                                hide: "size",
                                show : "slide"
                            });
                            $( "#openerred" ).click(function() {
                                $( "#dialog-1" ).dialog( "open" );
                            });
                        });
                    </script>
                    <div id="dialog-1" class="registeredusers"  role="dialog" title="Добавить нового пользователя">

                        <form  role="form" method="post" action="<?php echo URL::base(); ?>admin/addingus" name="form">

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
                    <script>
                        $(function() {
                            $( "#dialog-3" ).dialog({
                                autoOpen: false,
                                hide: "size",
                                show : "slide",
                                height: 200
                            });
                            $( "#opener-3" ).click(function() {
                                $( "#dialog-3" ).dialog( "open" );
                            });
                        });
                    </script>

                    <!-- HTML -->
                    <div id="dialog-3" title="Добавить расписание для класса">
                        <form  role="form" method="post" action="<?php echo URL::base(); ?>admin/rasp" name="form">

                            <div id="addrasp">

                                <div  style="margin-top: 20px;">

                                        <select class="cbx" onchange="document.getElementById('combo').value=this.value;" size=1>
                                            <option>A</option>
                                            <option>Б</option>
                                            <option>В</option>
                                            <option>Г</option>
                                            <option>Д</option>
                                        </select>
                                        <input name="combo" id="combo" type = "hidden"  value = ""/>

                                </div>
                                <div class="rgstrcntr">
                                    <input type="submit" style="margin-top: 33px;" name='addbtn' class="buttonregistr" value="Добавить">

                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="alala">
                          <div id="admin_txt">

                              <ul>

                                  <a href="#" id="openerred"  role="button"><li>Регистрация нового пользователя</li></a>

                                  <a href="<?php echo URL::base(); ?>admin/regusers" ><li> Зарегистрированные пользователи</li></a>

                              </ul>

                          </div>

                         <div id="admin_txt_t">
                                  <ul>
                                      <li class="cllaaaa">Расписание занятий</li>
                                      <a href="##" id="opener-3" role="button"> <li> Добавление нового расписания</li></a>
                                      <li class="clssss"> Просмотр расписания</li>

                                  </ul>

                          </div>
                     </div>
