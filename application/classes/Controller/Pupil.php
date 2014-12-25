<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pupil extends Controller_System_Base  {


    public function action_index()
    {
        $model=ORM::factory('Pupil', $this->user->id);
        $this->title = 'Страница ученика';
        $this->txt = 'Профиль ученика';
        $this->content = View::factory('pages/userp/main_page')->bind('data',$model);
    }
    public function action_diary(){
        
        $query="SELECT * from lesson";
        $data=DB::query(Database::SELECT,$query)->execute();

    	  $this->title = 'Страница ученика';
       	  $this->txt = 'Профиль ученика';
    	  $this->content = View::factory('pages/userp/diary');
    }
    public function action_raiting(){

    	 $this->title = 'Страница ученика';
       	  $this->txt = 'Рейтинг успеваемости ученика';
    	  $this->content = View::factory('pages/userp/raiting');
    }

} // End Welcome
