<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Lesson extends ORM {

    protected $_table_name ='lesson';
    protected $_table_columns=array(
        'id'=>array(
            'type'=>'int(10)',
            'is_nullable'=>false

        ),
         'classid'=>array(
            'type'=>'int(10)',
            'is_nullable'=>false

        ),
        'subjectid'=>array(
            'type'=>'int(10)',
            'is_nullable'=>false

        ),
        'teacherid'=>array(
            'type'=>'int(10)',
            'is_nullable'=>false

        ),
        'day_of_week'=>array(
            'type'=>'varchar(20)',
            'is_nullable'=>false

        ),
        'time_of_start'=>array(
            'type'=>'varchar(22)',
            'is_nullable'=>false

        ),
         'time_of_end'=>array(
            'type'=>'varchar(22)',
            'is_nullable'=>false

        ),
        'room'=>array(
            'type'=>'varchar(12)',
            'is_nullable'=>false

        ),

    );
}
