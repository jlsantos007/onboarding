<?php

class FactorialForm extends CFormModel
{
    public $baseNumber;

    public function rules()
    {
        return [
            ['baseNumber', 'numerical', 'integerOnly' => true],
            ['baseNumber', 'required'],
        ];
    }
}