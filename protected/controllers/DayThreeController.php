<?php

class DayThreeController extends Controller
{

    public function actionAbout()
    {
        $this->render('about');
    }

    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }

    public function actionKaprekar()
    {
        $kaprekarNumbers = [];
        $index           = 0;

        for ($baseNumber = 1; $baseNumber < 1000; $baseNumber++) {
            $squareNumber   = pow($baseNumber, 2);
            $squareToString = (string)$squareNumber;
            $mid            = (int)strlen($squareToString) / 2;
            $left           = (int)substr($squareToString, 0, $mid);
            $right          = (int)substr($squareToString, $mid);
            $sum            = $left + $right;

            if ($sum === $baseNumber) {
                $kaprekarNumbers[$index] = $sum;
                $index++;
            }
        }
        $this->render('kaprekar', compact('kaprekarNumbers'));
    }

    public function actionMatrix()
    {
        $matrix_model = new MatrixForm;

        if (isset($_POST['MatrixForm'])) {
            $matrix_model->attributes = $_POST['MatrixForm'];
            $row_length               = $matrix_model->row_length;
            $column_length            = $matrix_model->column_length;
            $rotation                 = $matrix_model->rotation;
            $matrix                   = array();
            $count                    = 0;

            for ($row = 0; $row < $row_length; ++$row) {
                for ($column = 0; $column < $column_length; ++$column) {
                    $count                 += 1;
                    $matrix[$row][$column] = "<td>".$count."</td>";
                }
            }
            $rotated_matrix = $this->actionCounterClockwise($column_length, $matrix, $row_length, $rotation);
            $new_matrix     = $this->actionPrintMatrix($rotated_matrix);

            $this->render('matrixtable', array('matrix' => $matrix, 'new_matrix' => $new_matrix));
        } else {
            $this->render('matrix', array('matrix_model' => $matrix_model));
        }
    }

    public function actionCounterClockwise($column_length, $matrix, $row_length, $times_rotation)
    {
        $start_row    = 0;
        $start_column = 0;

        while ($row_length > 1 && $column_length > 1) {
            $matrix_length   = ((2 * $row_length) + (2 * $column_length)) - 4;
            $actual_rotation = $times_rotation % $matrix_length;

            for ($rotation = 0; $rotation < $actual_rotation; $rotation++) {
                $left_top_corner = $matrix[$start_row][$start_column];

                for ($column_index = $start_column; $column_index < $start_column + $column_length - 1; $column_index++) {
                    $matrix[$start_row][$column_index] = $matrix[$start_row][$column_index + 1];
                }

                $last_column = $start_column + $column_length - 1;
                for ($row_index = $start_row; $row_index < $start_row + $row_length - 1; $row_index++) {
                    $matrix[$row_index][$last_column] = $matrix[$row_index + 1][$last_column];
                }

                $last_row = $start_row + $row_length - 1;
                for ($column_index = $start_column + $column_length - 1; $column_index >= $start_column + 1; $column_index--) {
                    $matrix[$last_row][$column_index] = $matrix[$last_row][$column_index - 1];
                }

                for ($row_index = $start_row + $row_length - 1; $row_index >= 1 + $start_row; $row_index--) {
                    $matrix[$row_index][$start_column] = $matrix[$row_index - 1][$start_column];
                }

                $matrix[$start_row + 1][$start_column] = $left_top_corner;
            }
            $start_row++;
            $start_column++;

            $row_length    -= 2;
            $column_length -= 2;
        }

        return $matrix;
    }

    public function actionPrintMatrix($matrix)
    {
        $matrix_size = count($matrix);

        for ($row = 0; $row < $matrix_size; ++$row) {
            for ($column = 0; $column < $matrix_size; ++$column) {
                '<td>'.$matrix[$row][$column].'</td>';
            }
        }

        return $matrix;
    }
}