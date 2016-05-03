<?php

class Review extends AppModel {

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message' => 'Введите ФИО'
        ),
        'body' => array(
            'rule' => 'notEmpty',
            'message' => 'Введите текст отзыва'
        ),
        
    );
   
}
?>