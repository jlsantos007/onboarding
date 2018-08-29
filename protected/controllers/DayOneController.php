<?php

class DayOneController extends Controller
{

    const MAX_COUNT = 10;
    const MAX_ROW = 5;
    const MAX_RANGE_NUMBER = 1000;
    const BASE_NUMBER = 0;
    const START_NUMBER = 1;

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
        for ($count = 1; $count <= self::MAX_COUNT; $count++) {
            $displayCount[$count - 1] = $count <= 9 ? $count.' - ' : $count;
        }
        $this->render('number', compact('displayCount'));
    }

    public function actionSummation()
    {
        $displaySum = self::BASE_NUMBER;

        for ($count = 1; $count < 30; $count++) {
            $displaySum += $count;
        }
        $this->render('summation', compact('displaySum'));
    }

    public function actionNestedLoop()
    {
        for ($row = 1; $row <= self::MAX_ROW; $row++) {
            for ($column = 0; $column < $row; $column++) {
                $rightTriangle[$row - 1][$column] = '* ';
            }
        }
        $this->render('nestedloop', compact('rightTriangle'));
    }

    public function actionFactorial()
    {
        $factorialModel = new FactorialForm;
        $startNumber = self::START_NUMBER;
        $factorial = self::BASE_NUMBER;

        if (isset($_POST['FactorialForm'])) {
            $baseNumber = implode($_POST['FactorialForm']);

            for ($counter = 1; $counter < $baseNumber; $baseNumber--) {
                $factorial = $startNumber * (int)$baseNumber;
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
        for ($counter = 1; $counter <= self::MAX_RANGE_NUMBER; $counter++) {
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