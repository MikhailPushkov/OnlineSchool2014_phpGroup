<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Relative extends ORM {

    protected $_table_name='relative';
    protected $_table_columns=array(
        'id'=>array(
            'type'=>'int(10)',
            'is_nullable'=>false

        ),
        'familia'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'imya'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'otchestvo'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'email'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'phone'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
        'tiprodstv'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        ),
    );

}
