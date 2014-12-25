<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Pupil extends ORM {

    protected $_table_name ='pupil';
    protected $_table_columns=array(
        'ID'=>array(
            'type'=>'int(10)',
            'is_nullable'=>false

        ),
        'username'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
         'classid'=>array(
            'type'=>'int(10)',
            'is_nullable'=>false

        ),
        'table_role'=>array(
            'type'=>'varchar(25)',
            'is_nullable'=>false

        ),
        'role'=>array(
            'type'=>'varchar(20)',
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
        'address'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'class'=>array(
            'type'=>'varchar(15)',
            'is_nullable'=>false

        ),
        'datebirth'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'email'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'year_of_entering'=>array(
            'type'=>'varchar(20)',
            'is_nullable'=>false

        ),

    );
}
