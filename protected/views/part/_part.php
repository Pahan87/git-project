<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    echo CHtml::form('','POST');
    
    echo CHtml::textField('text','valet');
    
    $a = CHtml::listData($models, 'id', 'title');
    
    echo CHtml::dropDownList('drop', '', $a, array('class'=>'one'));
    
    echo CHtml::submitButton('Отправка');
    
    //echo CHtml::image('/');
    
    echo CHtml::endForm();

