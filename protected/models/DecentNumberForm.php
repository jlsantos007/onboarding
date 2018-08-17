<?php

class DecentNumberForm extends CFormModel
{
    public $key_number;

    public function rules()
    {
        return array(
            array('key_number', 'numerical', 'integerOnly' => true),
            array('key_number', 'required'),
        );
    }
}