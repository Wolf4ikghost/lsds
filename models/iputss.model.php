<?php
class iputss extends Model
{
    protected $name = 'Поля';

    protected $model_elements = [
        ['', 'char', 'txtx' ,['required' => true]],
        ['', 'date_time', 'registration_date', ['required' => true]]
    ];
}

?>