<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Realitive extends ORM {

    protected $_table_name='realitive';
    protected $_table_columns=array(
        'id'=>array(
            'type'=>'int',
            'is_nullable'=>false

        ),
        'f'=>array(
            'type'=>'varchar(45)',
            'is_nullable'=>false

        ),
        'i'=>array(
            'type'=>'varchar(45)',
            'is_nullable'=>false

        ),
        'o'=>array(
            'type'=>'varchar(45)',
            'is_nullable'=>false

        ),
        'email'=>array(
            'type'=>'varchar(45)',
            'is_nullable'=>false

        ),
        'phone'=>array(
            'type'=>'varchar(45)',
            'is_nullable'=>false

        ),
        'typereal'=>array(
            'type'=>'varchar(45)',
            'is_nullable'=>false

        ),
    );
/*
    public  function add_post($f,$i,$o,$email,$phone,$typereal){

        $data=array('f'=>$f,'i'=>$i,'o'=>$o,'email'=>$email,'phone'=>$phone,'typereal'=>$typereal);

        ORM::factory('realitive')
                ->values($data)
                ->save();
    }*/
  /*  public function del($id){

        $post = ORM::factory('realitive')->find($id);
        $post->delete();

    }
    public function upadate($id)
    {
        $post = ORM::factory('realitive')->find($id);
        $post->update();
    }*/
}
