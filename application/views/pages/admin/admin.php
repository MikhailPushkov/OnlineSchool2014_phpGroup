                    <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div  class="modal-dialog ">
                                <div class="modal-content">

                                      <form  role="form" method="post" action="admin/addingus" name="form">

                                          <div id="registeruser">

                                              <div class="header">

                                                  <h1>Добавить нового пользователя<h1>
                                              </div>
                                              <div id="cbxuregister">

                                                      <div class="chk"><label class="radio-inline" ><input type="radio" name="radio" value="teach" ><span class="kalapaarida">Ученик </span></label></div>
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
                    
                      <div class="modal fade " id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div  class="modal-dialog ">
                                <div class="modal-content">

                                      <form  role="form" method="post" action="rasp" name="form">

                                          <div id="addrasp">

                                              <div class="header">
                                                  <h2>Добавить расписание для класса
                                                 <select class="cbx" onchange="document.getElementById('combo').value=this.value;" size=1>
                                                      <option>A</option>
                                                      <option>Б</option>
                                                      <option>В</option>
                                                      <option>Г</option>
                                                      <option>Д</option>
                                                  </select>
                                                  <input name="combo" id="combo" type = "hidden"  value = ""/>
                                                  </h2>
                                              </div>
                                              <div class="buttonadd">

                                                  <input type="submit" name="addbtn" class="btn-large" value="Добавить">

                                              </div>
                                          </div>
                                      </form>
                                </div>
                          </div>
                    </div>
                    
                     <div class="alala">
                          <div id="admin_txt">

                              <ul>

                                  <a href="#myModal" role="button" data-toggle="modal"><li>Регистрация нового пользователя</li></a>

                                  <li> Зарегистрированные пользователи</li>
                              </ul>

                          </div>

                         <div id="admin_txt_t">
                                  <ul>
                                      <li class="cllaaaa">Расписание занятий</li>
                                       <a href="#myModal1" role="button" data-toggle="modal"><li>Добавление нового расписания</li></a>
                                      <li class="clssss"> Просмотр расписания</li>

                                  </ul>

                          </div>
                     </div>
