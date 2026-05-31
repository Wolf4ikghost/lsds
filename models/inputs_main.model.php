<?php
class InputsMain extends Model
{
    protected $name = 'InputsMain';
    protected $model_elements  = [
        ['Название задачи', 'text', ['required' => true]],
        ['Дата', 'date', ['required' => true]]
    ];
    public function display()
    {
        ... //Отображение списка вопросов и ответов
    }
}
?>