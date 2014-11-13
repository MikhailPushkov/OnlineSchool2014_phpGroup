<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_System_Base  {

    public function action_index(){
        $this->title = 'Страница админа';
        $this->txt = 'Учетные записи';
        $this->content = View::factory('pages/admin/admin');
    }
    public function action_addusert(){
        $this->txt = 'Учетные записи';
        $this->content = View::factory('pages/admin/addusert');
    }
    public function action_adduserp(){
        $this->txt = 'Учетные записи';
        $this->content = View::factory('pages/admin/adduserp');
    }
    public function action_rasp()
    {
    	$this->title = 'Расписание';
    	$this->txt ='Расписание для класса '  . $_POST['combo'];
    	$this->content = View::factory('pages/rasp/rasp');
    }
    public function action_addingus(){
        if (isset($_POST['rdbtn'])) {
            $selected_radio = $_POST['radio'];
            if ($selected_radio == 'teach') {
                $this->action_adduserp();
            }
            else if ($selected_radio == 'pupil') {
                $this->action_addusert();
            }
        }
    }
    public  function  action_regusers(){
        $this->txt = 'Управление учетными записями';
        $this->content = View::factory('pages/admin/registeredusers');
    }
    public  function action_addrealitv(){

        if(isset($_POST)){
            $realitive=ORM::factory('Realitive')->values($_POST)->save();
        }
        $this->json["id"] = $realitive->id;
        $this->json["typereal"] = $realitive->typereal;
    }

    public function action_deluserp(){

        $id = $this->request->param('id');

        $del = ORM::factory('pupil')->delete($id);

    }
/*
    public function action_updueserp($id){

    }

    public function action_delusert($id){

    }

    public function action_upduesert($id){


    }*/
    /*
    public  function  action_saveuser(){
        if(count($_POST)==0)
            throw HTTP_Exception::factory(404,'Не задано ни одного значения.');
        try {
            $model = ORM::factory('teacher')->values($_POST)->save();

        } catch (Validation_Exception  $e) {
            $this->txt = 'Учетные записи';
            $this->content = View::factory('pages/admin/adduserp')->bind('post', $_POST)->bind('error', $e->getMessage());
        }
    }*/
} // End Welcome
