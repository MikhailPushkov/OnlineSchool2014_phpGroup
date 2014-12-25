<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Subject extends ORM {

    protected $_table_name ='subject';
    protected $_table_columns=array(
        'id'=>array(
            'type'=>'int',
            'is_nullable'=>false

        ),
        'article'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        )
    );

}
