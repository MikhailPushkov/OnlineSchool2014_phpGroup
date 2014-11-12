<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Articles extends ORM {

    protected $_table_article='articles';


    public function add(){


    }

    public function del(){

        $post = ORM::factory('articles')->find($id);
        $post->delete();

    }
    public function upadate()
    {
        $post = ORM::factory('articles')->find($id);
        $post->update();
    }
}
