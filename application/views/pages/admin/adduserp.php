<style>
	#commentForm {
		width: 500px;
	}
	#commentForm label {
		width: 250px;
	}
	#commentForm label.error, #commentForm input.submit {
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
        // validate signup form on keyup and submit
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
                    minlength: 3
                },
                address:{required:true}
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
                email: "Please enter a valid email address",
                datebirth:{required:'kalaparida'},
                address:{required:'ajina'},
                login:{required:'asdasdasdasdasdasdasd'}
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
                                    <div class="span10">
                                      <form class="form-horizontal"  action="addinguserp"  method="post" id="signupForm" role="form">
                                           <label class="align">Логин  <input type="text" name="login" class="form-control right" id="login" placeholder=" "></label>
                                           <label class="align">Пароль  <input type="password" name="password" class="form-control right" id="password" placeholder=" " ></label>
                                           <label class="align">Подтвердите пароль  <input type="password" name="confirm_password" class="form-control right" id="confirm_password" placeholder=" " ></label>
                                           <label class="align">Фамилия   <input type="text" name="f" class="form-control right" id="f" placeholder=" " ></label>
                                           <label class="align">Имя  <input type="text" name="i" class="form-control right" id="i" placeholder=" " ></label>
                                           <label class="align">Отчество <input type="text"  name="o" class="form-control right" id="v" placeholder=" " ></label>
                                           <label class="align">Адрес  <input type="text" name="address" class="form-control right" id="address" placeholder=" " ></label>
                                           <label class="align">Класс  <input type="text" name="class" class="form-control right" id="class" placeholder=" " ></label>
                                           <label class="align">Дата рождения  <input type="date" name="datebirth" class="form-control right" id="datebirth" placeholder=" " ></label>
                                           <label class="align">Родственник  <a href="#" id="myModalBtn" role="button" data-toggle="modal"><img class="addphotos" src="<?php echo URL::base(); ?>./img/add.png"/></a></label>
                                           <table id="rodstv"  class="table" style="margin-left: auto;width: 200px;margin-top: -47px;">
                                           	<thead>
                                           		<td>Родственник</td><td hidden="true">ИД</td><td>Удалить</td></th>
                                           	</thead>
                                           	<tbody>
	                                           	<?php
	                                           		//foreach ($datas as $data)
	                                           			//echo '<tr><td>'.$data->fio.'</td><td hidden="true" class="id">'.$data->id.'</td><td>'.Form::button('delete', 'X', array('class'=>'btnDelete')).'</td></tr>'
	                                           	?>
	                                        </tbody>
                                           </table>
                                          <div class="center">
                                              <input type="submit"  name='rdbtn' class="buttonregistr" value="Создать">
                                              <input type="button"  onclick="location.href='index'"  name='redirect' class="buttonregistr" value="Отмена">
                                          </div>
                                      </form>
                                   </div>
                                </div>
                              </div>
                            </div>

                <div class="" hidden="true" id="myModal" tabindex="-1">
	                <?php echo 
			    		Form::open(NULL, array('class'=>'', 'id'=>'')).
		    			Form::label('lbl', 'Фамилия', array('class'=>'align')).
		    			Form::input('familia', NULL, array('class'=>'form-control ', 'id'=>'familia', 'placeholder'=>' ', 'required'=>'')).
		    			Form::label('lbl', 'Имя', array('class'=>'align')).
		    			Form::input('imya', NULL, array('class'=>'form-control ', 'id'=>'imya', 'placeholder'=>' ', 'required'=>'')).
		    			Form::label('lbl', 'Отчество', array('class'=>'align')).
		    			Form::input('otchestvo', NULL, array('class'=>'form-control ', 'id'=>'otchestvo', 'placeholder'=>' ', 'required'=>'')).
		    			Form::label('lbl', 'email', array('class'=>'align')).
		    			Form::input('email', NULL, array('class'=>'form-control ', 'id'=>'email', 'placeholder'=>' ', 'required'=>'')).
		    			Form::label('lbl', 'Телефон', array('class'=>'align')).
		    			Form::input('phone', NULL, array('class'=>'form-control ', 'id'=>'phone', 'placeholder'=>' ', 'required'=>'')).
		    			Form::label('lbl', 'Тип родства', array('class'=>'align')).
		    			Form::select('tiprodstv', array(
                                                            'grandmo'=>'Бабушка',
                                                            'grandpa'=>'Дедушка',
                                                            'moth'=>'Мать',
                                                            'fath'=>'Отец'
                                                       ), NULL, array
                        ('class'=>'form-control '), array('id' => 'tiprodstv')).
		    			Form::close();
		    		?>
                </div>