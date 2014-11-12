<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Pupil extends ORM {

    protected $_table_pupil ='pupil';


    public function delete($id){

        $post = ORM::factory('pupil')->find($id);
        $post->delete();

    }
    public function upadate($id)
    {
        $post = ORM::factory('pupil')->find($id);
        $post->update();
    }
}
