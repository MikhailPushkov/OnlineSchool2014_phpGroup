<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pupil extends Controller_System_Base  {


    public function action_index($id)
    {
        $post = ORM::factory('pupil')->find($id);
        $post->update();
    }

} // End Welcome
