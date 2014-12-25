<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Сlass extends ORM {

    protected $_table_name ='class';
    protected $_table_columns=array(
        'id'=>array(
            'type'=>'int(10)',
            'is_nullable'=>false

        ),
         'number'=>array(
            'type'=>'varchar(11)',
            'is_nullable'=>false

        ),
        'word_of_class'=>array(
            'type'=>'varchar(10)',
            'is_nullable'=>false

        )
       
    );
}
