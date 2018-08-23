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
        $count_print = array();

        for ($count = 1; $count <= 10; $count++) {
            if ($count <= 9) {
                $count_print[$count - 1] = $count." - ";
            } else {
                $count_print[$count - 1] = $count;
            }
        }

        $this->render('number', array('count_print' => $count_print));
    }

    public function actionSummation()
    {
        $sum = 0;

        for ($count = 1; $count < 30; $count++) {
            $sum += $count;
        }
        $this->render('summation', array('sum' => $sum));
    }

    public function actionNestedLoop()
    {
        $right_triangle = array();

        for ($row = 1; $row <= 5; $row++) {
            for ($column = 0; $column < $row; $column++) {
                $right_triangle[$row - 1][$column] = "* ";
            }
        }
        $this->render('nestedloop', array('right_triangle' => $right_triangle));
    }

    public function actionFactorial()
    {
        $factorial_model = new FactorialForm;
        $start_number    = 1;
        $factorial       = 0;

        if (isset($_POST['FactorialForm'])) {
            $base_number = implode($_POST['FactorialForm']);

            for ($counter = 1; $counter < $base_number; $base_number--) {
                $factorial    = (int)$start_number * (int)$base_number;
                $start_number = (int)$factorial;
            }

            Yii::app()->user->setFlash('success',
                'The Factorial of '.implode($_POST['FactorialForm']).' is '.$factorial);
            $this->refresh();
        }

        $this->render('factorial', array('factorial_model' => $factorial_model));
    }

    public function actionFizzBuzz()
    {
        $fizz_buzz = array();

        for ($counter = 1; $counter <= 1000; $counter++) {
            if ($counter % 3 === 0 && $counter % 5 === 0) {
                $fizz_buzz[$counter - 1] = 'FizzBuzz';
            } elseif ($counter % 3 === 0) {
                $fizz_buzz[$counter - 1] = 'Fizz';
            } elseif ($counter % 5 === 0) {
                $fizz_buzz[$counter - 1] = 'Buzz';
            } else {
                $fizz_buzz[$counter - 1] = $counter;
            }
        }
        $this->render('fizzbuzz', array('fizz_buzz' => $fizz_buzz));
    }
}