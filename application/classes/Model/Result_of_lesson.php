<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Result_of_lesson extends ORM {

    protected $_table_name ='result_of_lesson';
    protected $_table_columns=array(
        'id'=>array(
            'type'=>'int(10)',
            'is_nullable'=>false

        ),
         'pupilid'=>array(
            'type'=>'int(10)',
            'is_nullable'=>false

        ),
         'lessonid'=>array(
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
        'mark'=>array(
            'type'=>'varchar(10)',
            'is_nullable'=>false

        ),
        'visit'=>array(
            'type'=>'varchar(12)',
            'is_nullable'=>false

        ),
        'hometask'=>array(
            'type'=>'varchar(225)',
            'is_nullable'=>false

        ),
         'notification'=>array(
            'type'=>'varchar(225)',
            'is_nullable'=>false

        )

    );
}
