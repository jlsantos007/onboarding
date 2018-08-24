<?php

class DayTwoController extends Controller
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

    public function actionBookFine()
    {
        $expectedYear   = 2015;
        $expectedMonth  = 9;
        $expectedDay    = 25;
        $returnedYear   = 2015;
        $returnedMonth  = 9;
        $returnedDay    = 29;
        $fineLateDays   = 15;
        $fineLateMonths = 500;
        $decimalPlaces  = 2;

        if ($returnedDay >= $expectedDay && $returnedMonth === $expectedMonth && $returnedYear === $expectedYear) {
            $bookFine = abs($expectedDay - $returnedDay) * $fineLateDays;
        } elseif ($returnedDay >= $expectedDay && $returnedMonth > $expectedMonth && $returnedYear === $expectedYear) {
            $bookFine = abs($expectedMonth - $returnedMonth) * $fineLateMonths;
        } elseif ($returnedYear > $expectedYear) {
            $bookFine = 10000;
        } else {
            $bookFine = 0;
        }

        $bookFine    = number_format($bookFine, $decimalPlaces, '.', ',');
        $displayFine = new CArrayDataProvider([
            [
                'id'                       => 1,
                'bookTitle'                => 'Book 1',
                'bookExpectedReturnedDate' => '9-25-2015',
                'bookReturnedDate'         => '9-29-2015',
                'bookFine'                 => $bookFine,
            ],
        ]);
        $this->render('bookfine', compact('displayFine'));
    }

    public function actionDecentNumber()
    {
        $decentNumberModel = new DecentNumberForm;
        $display3s         = '3';
        $display5s         = '5';
        $multiplier        = 0;

        if (isset($_POST['DecentNumberForm'])) {
            $keyNumber = implode($_POST['DecentNumberForm']);

            switch ($keyNumber % 3) {
                case 0:
                    $multiplier = 0;
                    break;
                case 1:
                    $multiplier = 2;
                    break;
                case 2:
                    $multiplier = 1;
                    break;
            }

            if (5 * $multiplier <= $keyNumber) {
                $decentNumber = str_repeat($display5s, (int)$keyNumber - 5 * (int)$multiplier).
                    str_repeat($display3s, 5 * (int)$multiplier);
            } else {
                $decentNumber = '-1';
            }

            Yii::app()->user->setFlash('success',
                'The Decent number is '.$decentNumber);
            $this->refresh();
        }
        $this->render('decentnumber', compact('decentNumberModel'));
    }

    public function actionPerfectSquare()
    {
        $squareCount   = 0;
        $maxBaseNumber = 10000;
        $squareRoot    = [];

        for ($baseNumber = 10; $baseNumber <= $maxBaseNumber; $baseNumber++) {
            $squareNumber   = sqrt($baseNumber);
            $roundNumber    = floor($squareNumber);
            $perfect_square = $squareNumber - $roundNumber;

            if ($perfect_square == 0) {
                $squareRoot[$squareCount] = $baseNumber;
                $squareCount++;
            }
        }

        $this->render('perfectsquare', compact('squareRoot', 'squareCount'));
    }
}