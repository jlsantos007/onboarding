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
        $matrixModel = new MatrixForm;

        if (isset($_POST['MatrixForm'])) {
            $matrixModel->attributes = $_POST['MatrixForm'];
            $rowLength               = $matrixModel->rowLength;
            $columnLength            = $matrixModel->columnLength;
            $rotation                = $matrixModel->rotation;
            $matrix                  = array();
            $count                   = 0;

            for ($row = 0; $row < $rowLength; ++$row) {
                for ($column = 0; $column < $columnLength; ++$column) {
                    $count                 += 1;
                    $matrix[$row][$column] = "<td>".$count."</td>";
                }
            }
            $rotatedMatrix = $this->actionCounterClockwise($columnLength, $matrix, $rowLength, $rotation);
            $newMatrix     = $this->actionPrintMatrix($rotatedMatrix);

            $this->render('matrixtable', array('matrix' => $matrix, 'newMatrix' => $newMatrix));
        } else {
            $this->render('matrix', array('matrixModel' => $matrixModel));
        }
    }

    public function actionCounterClockwise($columnLength, $matrix, $rowLength, $timesRotation)
    {
        $startRow    = 0;
        $startColumn = 0;

        while ($rowLength > 1 && $columnLength > 1) {
            $matrixLength   = ((2 * $rowLength) + (2 * $columnLength)) - 4;
            $actualRotation = $timesRotation % $matrixLength;

            for ($rotation = 0; $rotation < $actualRotation; $rotation++) {
                $leftTopCorner = $matrix[$startRow][$startColumn];

                $matrix = $this->actionRotateFirstColumn($columnLength, $matrix, $startColumn,
                    $startRow);
                $matrix = $this->actionRotateFirstRow($columnLength, $matrix, $rowLength, $startColumn,
                    $startRow);
                $matrix = $this->actionRotateLastColumn($columnLength, $matrix, $rowLength, $startRow, $startColumn);
                $matrix = $this->actionRotateLastRow($matrix, $rowLength, $startRow, $startColumn);

                $matrix[$startRow + 1][$startColumn] = $leftTopCorner;
            }
            $startRow++;
            $startColumn++;

            $rowLength    -= 2;
            $columnLength -= 2;
        }

        return $matrix;
    }

    public function actionRotateFirstColumn($columnLength, $matrix, $startColumn, $startRow)
    {
        for ($columnIndex = $startColumn; $columnIndex < $startColumn + $columnLength - 1; $columnIndex++) {
            $matrix[$startRow][$columnIndex] = $matrix[$startRow][$columnIndex + 1];
        }

        return $matrix;
    }

    public function actionRotateFirstRow($columnLength, $matrix, $rowLength, $startColumn, $startRow)
    {
        $lastColumn = $startColumn + $columnLength - 1;
        for ($rowIndex = $startRow; $rowIndex < $startRow + $rowLength - 1; $rowIndex++) {
            $matrix[$rowIndex][$lastColumn] = $matrix[$rowIndex + 1][$lastColumn];
        }

        return $matrix;
    }

    public function actionRotateLastColumn($columnLength, $matrix, $rowLength, $startRow, $startColumn)
    {
        $lastRow = $startRow + $rowLength - 1;
        for ($columnIndex = $startColumn + $columnLength - 1; $columnIndex >= $startColumn + 1; $columnIndex--) {
            $matrix[$lastRow][$columnIndex] = $matrix[$lastRow][$columnIndex - 1];
        }

        return $matrix;
    }

    public function actionRotateLastRow($matrix, $rowLength, $startRow, $startColumn)
    {
        for ($rowIndex = $startRow + $rowLength - 1; $rowIndex >= 1 + $startRow; $rowIndex--) {
            $matrix[$rowIndex][$startColumn] = $matrix[$rowIndex - 1][$startColumn];
        }

        return $matrix;
    }

    public function actionPrintMatrix($matrix)
    {
        $matrixSize = count($matrix);

        for ($row = 0; $row < $matrixSize; ++$row) {
            for ($column = 0; $column < $matrixSize; ++$column) {
                '<td>'.$matrix[$row][$column].'</td>';
            }
        }

        return $matrix;
    }
}
