<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_System_Base  {


    public function action_index()
    {
        $this->redirect('auth');
    }

} // End Welcome
