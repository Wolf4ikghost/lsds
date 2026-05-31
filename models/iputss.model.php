<?php
class Iputss extends ModelSimple
{
    protected $name = 'Поля';

    protected $model_elements = [
        ['Текстовое поле', 'text', 'txtx' ,['required' => true]],
        ['Временное поле', 'date', 'vremya', ['required' => true]],
    ];
}
?>