<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Teacher extends ORM {

    protected $_table_teacher ='teacher';

    public function del($id){

        $post = ORM::factory('teacher')->find($id);
        $post->delete();

    }
    public function upadate($id){

        $post = ORM::factory('teacher')->find($id);
        $post->update();
    }
}
