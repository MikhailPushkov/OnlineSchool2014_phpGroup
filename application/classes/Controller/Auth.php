<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_System_Base  {

    public function action_index()
    {
        $this->title = 'Вход в систему';
        $this->txt = 'Электронная школа';
        $this->content = View::factory('pages/auth/login');
    }

    public function action_login() {

       $this->redirect('admin');
    }



/*
        if(count($_POST)==0){
            $this->redirect(URL::base());
        }
        $this->a1->login($_POST['username'],$_POST['password']);
            if($this->a2->allowed('admin', 'index'))
                $this->redirect('admin');
            elseif($this->a2->allowed('userspage', 'index'))
                $this->redirect('userspage');
            elseif($this->a2->allowed('userspage', 'index'))
                $this->redirect('userspage');
    }*/
    public  function action_logout(){

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

    }
    public function action_logout(){

        Auth::instance()->logout();
        $this->redirect('login');

    }*/
} // End Welcome
