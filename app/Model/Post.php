<?php

class Post extends AppModel {
    public $belongsTo = array(
        'Type' => array(
            'className' => 'Type',
            'foreignKey' => 'type_id'
        )
    );
}