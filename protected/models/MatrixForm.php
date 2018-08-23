<?php

class MatrixForm extends CFormModel
{
    public $row_length;
    public $column_length;
    public $rotation;

    public function rules()
    {
        return array(
            array('row_length, column_length, rotation', 'numerical', 'integerOnly' => true),
            array('row_length column_length', 'numerical', 'min' => 3, 'max' => 10),
            array('row_length, column_length, rotation', 'required'),
        );
    }
}