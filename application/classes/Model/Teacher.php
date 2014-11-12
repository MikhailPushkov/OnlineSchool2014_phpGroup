<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Teacher extends ORM {

    protected $_table_teacher ='teacher';

    protected $_table_columns=array(
        'id'=>array(
            'type'=>'int',
            'is_nullable'=>false

        ),
        'login'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'password'=>array(
            'type'=>'varchar(110)',
            'is_nullable'=>false

        ),
        'f'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'i'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'o'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'email'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'phone'=>array(
            'type'=>'varchar(30)',
            'is_nullable'=>false

        ),
        'predmet'=>array(
            'type'=>'varchar(45)',
            'is_nullable'=>false

        ),
    );

}
