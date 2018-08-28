<?php

class MatrixForm extends CFormModel
{
    public $rowLength;
    public $columnLength;
    public $rotation;

    public function rules()
    {
        return array(
            array('rowLength, columnLength, rotation', 'numerical', 'integerOnly' => true),
            array('rowLength, columnLength', 'numerical', 'min' => 3, 'max' => 10),
            array('rowLength, columnLength, rotation', 'required'),
        );
    }
}