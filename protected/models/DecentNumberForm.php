<?php

class DecentNumberForm extends CFormModel
{
    public $keyNumber;

    public function rules()
    {
        return [
            ['keyNumber', 'numerical', 'integerOnly' => true],
            ['keyNumber', 'required'],
        ];
    }
}