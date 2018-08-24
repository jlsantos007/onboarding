<?php

class DayOneController extends Controller
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

    public function actionNumber()
    {
        $displayCount = [];
        $maxCount     = 10;

        for ($count = 1; $count <= $maxCount; $count++) {
            if ($count <= 9) {
                $displayCount[$count - 1] = $count.' - ';
            } else {
                $displayCount[$count - 1] = $count;
            }
        }

        $this->render('number', compact('displayCount'));
    }

    public function actionSummation()
    {
        $displaySum = 0;

        for ($count = 1; $count < 30; $count++) {
            $displaySum += $count;
        }
        $this->render('summation', compact('displaySum'));
    }

    public function actionNestedLoop()
    {
        $rightTriangle = [];
        $maxRow        = 5;

        for ($row = 1; $row <= $maxRow; $row++) {
            for ($column = 0; $column < $row; $column++) {
                $rightTriangle[$row - 1][$column] = "* ";
            }
        }
        $this->render('nestedloop', compact('rightTriangle'));
    }

    public function actionFactorial()
    {
        $factorialModel = new FactorialForm;
        $startNumber    = 1;
        $factorial      = 0;

        if (isset($_POST['FactorialForm'])) {
            $base_number = implode($_POST['FactorialForm']);

            for ($counter = 1; $counter < $base_number; $base_number--) {
                $factorial   = $startNumber * (int)$base_number;
                $startNumber = $factorial;
            }

            Yii::app()->user->setFlash('success',
                'The Factorial of '.implode($_POST['FactorialForm']).' is '.$factorial);
            $this->refresh();
        }

        $this->render('factorial', compact('factorialModel'));
    }

    public function actionFizzBuzz()
    {
        $fizzBuzz       = [];
        $maxRangeNumber = 1000;

        for ($counter = 1; $counter <= $maxRangeNumber; $counter++) {
            if ($counter % 3 === 0 && $counter % 5 === 0) {
                $fizzBuzz[$counter - 1] = 'FizzBuzz';
            } elseif ($counter % 3 === 0) {
                $fizzBuzz[$counter - 1] = 'Fizz';
            } elseif ($counter % 5 === 0) {
                $fizzBuzz[$counter - 1] = 'Buzz';
            } else {
                $fizzBuzz[$counter - 1] = $counter;
            }
        }
        $this->render('fizzbuzz', compact('fizzBuzz'));
    }
}