<?php

class Type extends AppModel {
    public $hasMany = array(
        'Post' => array(
            'className' => 'Post',
            'foreignKey' => 'type_id'
        )
    );
}
