<?php

class DayTwoController extends Controller
{

    const EXPECTED_YEAR = 2015;
    const EXPECTED_MONTH = 9;
    const EXPECTED_DAY = 25;
    const RETURNED_YEAR = 2015;
    const RETURNED_MONTH = 9;
    const RETURNED_DAY = 29;
    const FINE_LATE_DAYS = 15;
    const FINE_LATE_MONTHS = 500;
    const DECIMAL_PLACES = 2;
    const MAX_BASE_NUMBER = 10000;
    const DISPLAY_OF_3S = '3';
    const DISPLAY_OF_5S = '5';
    const START_COUNT = 0;

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
        $expectedYear = self::EXPECTED_YEAR;
        $expectedMonth = self::EXPECTED_MONTH;
        $expectedDay = self::EXPECTED_DAY;
        $returnedYear = self::RETURNED_YEAR;
        $returnedMonth = self::RETURNED_MONTH;
        $returnedDay = self::RETURNED_DAY;
        $fineLateDays = self::FINE_LATE_DAYS;
        $fineLateMonths = self::FINE_LATE_MONTHS;
        $decimalPlaces = self::DECIMAL_PLACES;

        if ($returnedDay >= $expectedDay && $returnedMonth === $expectedMonth && $returnedYear === $expectedYear) {
            $bookFine = abs($expectedDay - $returnedDay) * $fineLateDays;
        } elseif ($returnedDay >= $expectedDay && $returnedMonth > $expectedMonth && $returnedYear === $expectedYear) {
            $bookFine = abs($expectedMonth - $returnedMonth) * $fineLateMonths;
        } elseif ($returnedYear > $expectedYear) {
            $bookFine = 10000;
        } else {
            $bookFine = 0;
        }

        $bookFine = number_format($bookFine, $decimalPlaces, '.', ',');
        $displayFine = new CArrayDataProvider([
            [
                'id' => 1,
                'bookTitle' => 'Book 1',
                'bookExpectedReturnedDate' => '9-25-2015',
                'bookReturnedDate' => '9-29-2015',
                'bookFine' => $bookFine,
            ],
        ]);
        $this->render('bookfine', compact('displayFine'));
    }

    public function actionDecentNumber()
    {
        $decentNumberModel = new DecentNumberForm;

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
                $decentNumber = str_repeat(self::DISPLAY_OF_5S, (int)$keyNumber - 5 * (int)$multiplier).
                    str_repeat(self::DISPLAY_OF_3S, 5 * (int)$multiplier);
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
        $squareCount = self::START_COUNT;

        for ($baseNumber = 10; $baseNumber <= self::MAX_BASE_NUMBER; $baseNumber++) {
            $squareNumber = sqrt($baseNumber);
            $roundNumber = floor($squareNumber);
            $perfect_square = $squareNumber - $roundNumber;

            if ($perfect_square == 0) {
                $squareRoot[$squareCount] = $baseNumber;
                $squareCount++;
            }
        }

        $this->render('perfectsquare', compact('squareRoot', 'squareCount'));
    }
}