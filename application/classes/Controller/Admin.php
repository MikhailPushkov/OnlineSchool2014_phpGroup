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
    	//$model = ORM::factory('', $id);
        $this->txt = 'Учетные записи';
        $this->content = View::factory('pages/admin/adduserp');//->bind('datas', $model);
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
    public function action_rasp()
    {
        $this->title = 'Расписание';
        $this->txt ='Расписание для класса '  . $_POST['combo'];
        $this->content = View::factory('pages/rasp/rasp');
    }
    public  function action_addrealitv(){
        if(isset($_POST)){
            $model=ORM::factory('Realitive')->values($_POST)->save();
        }
        $this->json['id'] = $model->id;
        $this->json['fio'] = $model->f.' '.$model->i.' '.$model->o.' ('.$model->typereal.')';

    }
    public function action_deleterealitv() {
    	if(isset($_POST['id']))
    		$model=ORM::factory('Realitive', $_POST['id'])->delete();
    	$this->json[] = "OK";
    }

    public function action_deluserp(){

        $id = $this->request->param('id');

        $del = ORM::factory('pupil')->delete($id);

    }
    public function action_delusers(){

        $ss=$this->request->param('id');
        $model=ORM::factory('Pupil',$ss);

        if($model->loaded()){
            $model->delete();
        }
        else{
            $model=ORM::factory('Teacher',$ss)->delete();
        }

        $this->action_regusers();
    }
    public  function  action_regusers(){

        $this->txt = 'Управление учетными записями';

        $query='(Select id,email,login,f,i,o,role from pupil)
                UNION
                (Select id,email,login,f,i,o,role from teacher)
                Order by f
                ';
        $data=DB::query(Database::SELECT,$query)->execute();

        $this->content = View::factory('pages/admin/registeredusers')->bind('data',$data);

    }
    public function action_addinguserp(){

        if(isset($_POST)){
            $realitive=ORM::factory('Pupil')->values($_POST);
            $realitive->role='Ученик';
            $realitive->save();
        }
        $this->action_regusers();
    }
    public function action_addingusert(){

        if(isset($_POST)){

            $realitive=ORM::factory('Teacher')->values($_POST);
            $realitive->role='Учитель';
            $realitive->save();
        }
        $this->redirect('admin/regusers');
    }
    public function action_delusreg(){

    }
} // End Welcome
