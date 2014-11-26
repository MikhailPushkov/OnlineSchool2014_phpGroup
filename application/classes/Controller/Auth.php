<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_System_Base  {

    public function action_index()
    {
        if($this->a1->logged_in()){
            $this->request->controller();
        }
        $this->title = 'Вход в систему';
        $this->txt = 'Электронная школа';
        $this->content = View::factory('pages/auth/login');
    }

    public function action_login() {
        if(count($_POST)==0) {
        	Message::error('Неверно введен логин или пароль! Повторите попытку ввода.');
            $this->redirect('auth');
        	return;
        }
        $this->user = $this->a1->login($_POST['username'],$_POST['password']);
        if (!$this->user) {
        	Message::error('Неверно введен логин или пароль! Повторите попытку ввода.');
        } else {
	        if($this->a2->allowed('admin', 'index')){

	               $this->redirect('admin');
            }
	        elseif($this->a2->allowed('pupil', 'index'))
	            $this->redirect('pupil');
	        elseif($this->a2->allowed('teacher', 'index'))
	            $this->redirect('teacher');
            $data['data']='<input type="submit" style=" float: right;  margin: -16px -85px"  class="buttonregistr" value="Выйти">';
            $this->content = View::factory('layouts/header',$data);
        }
        $this->redirect('auth');
    }
    public function action_logout(){

        Auth::instance()->logout();
        $this->redirect('login');

    }
    /*
  public  function  action_register(){

        if(HTTP_REQUEST::POST == $this->request->method()){
            try{
                $user=ORM::factory('user')->create_user($_POST,array('username','password','email'));
                $user->add('roles','1');
                $this->redirect('auth/login');

            }catch (ORM_Validation_Exception $ex){
                $errors =$ex->errors('models');
            }
        }

    }*/

} // End Welcome
