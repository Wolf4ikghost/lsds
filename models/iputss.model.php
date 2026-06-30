<?php
class iputss extends Model
{
    protected $name = 'Поля';

    protected $model_elements = [
        ['Название задачи', 'char', 'txtx' ,['required' => true]],
        ['Время выполнения задачи', 'date', 'vr']
    ];
}

?>