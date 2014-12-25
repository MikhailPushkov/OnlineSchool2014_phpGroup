<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Teacher extends Controller_System_Base  {

    public function action_index()
    {	 
    	  $model=ORM::factory('Teacher', $this->user->id);

          $query="SELECT *,
                         (Select s.article from subject s where l.subjectid=s.id) as artic,
                         (Select c.number from class c where l.classid=c.id) as num
                        
                          from lesson l  ";
        $data=DB::query(Database::SELECT,$query)->execute();
        $this->title = 'Страница учителя';
        $this->txt = 'Профиль учителя';
        $this->content = View::factory('pages/usert/main_page')->bind('data',$model)->bind('dat',$data);
    }
    public function action_jurnal(){
       // $query="SELECT *,
                         //(Select s.article from subject s where l.subjectid='$id1') as artic,
//Select c.number from class c where l.classid='$id2') as num
                        
                      //    from lesson l  ";
       // $data=DB::query(Database::SELECT,$query)->execute();

    	  $this->title = 'Страница ученика';
       	  $this->txt = 'Журнал N Класс';
    	  $this->content = View::factory('pages/usert/jurnal');
    } 
    
  	public function action_export(){

  		  $this->title = 'Страница учителя';
       	$this->txt = 'Рейтинг успеваемости N класса';
    	  $this->content = View::factory('pages/usert/export');
  	}
  	public function action_rasp(){
      $model=ORM::factory('Teacher', $this->user->id);
      $id=$this->user->id;
      $query="SELECT *,
                         (Select t.f from teacher t where l.teacherid=t.id) as f,
                         (Select t.i from teacher t where l.teacherid=t.id) as i,
                         (Select t.o from teacher t where l.teacherid=t.id) as o,
                         (Select c.number from class c where l.classid=c.id) as n


                          from lesson l  ";
        $data=DB::query(Database::SELECT,$query)->execute();

  		  $this->title = 'Страница учителя';
       	  $this->txt = 'Расписание учителей';
    	  $this->content = View::factory('pages/usert/rasp')->bind('data',$data);
  	}

} // End Welcome
