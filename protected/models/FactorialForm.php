<?php

class FactorialForm extends CFormModel
{
    public $base_number;

    public function rules()
    {
        return array(
            array('base_number', 'numerical', 'integerOnly' => true),
            array('base_number', 'required'),
        );
    }
}