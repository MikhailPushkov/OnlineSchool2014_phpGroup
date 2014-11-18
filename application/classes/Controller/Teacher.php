<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Teacher extends Controller_System_Base  {


    public function action_index()
    {
        $this->title = 'Страница учителя';
        $this->txt = 'Профиль учителя';
        $this->content = View::factory('pages/usert/main_page');
    }

} // End Welcome
