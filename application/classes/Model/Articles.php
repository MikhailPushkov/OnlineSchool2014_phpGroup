<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Articles extends ORM {

    protected $_table_article='articles';

    protected $_table_columns=array(
        'id'=>array(
            'type'=>'int',
            'is_nullable'=>false

        ),
        'artice'=>array(
            'type'=>'varchar(55)',
            'is_nullable'=>false

        )
    );

}
