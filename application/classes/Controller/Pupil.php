<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pupil extends Controller_System_Base  {


    public function action_index()
    {
        $this->title = 'Страница ученика';
        $this->txt = 'Профиль ученика';
        $this->content = View::factory('pages/userp/main_page');
    }

} // End Welcome
