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
        $expected_year  = 2015;
        $expected_month = 9;
        $expected_day   = 25;
        $returned_year  = 2015;
        $returned_month = 9;
        $returned_day   = 29;

        if ($returned_day >= $expected_day && $returned_month === $expected_month && $returned_year === $expected_year) {
            $book_fine = abs($expected_day - $returned_day) * 15;
            $book_fine = number_format($book_fine, 2, '.', ',');
        } elseif ($returned_day >= $expected_day && $returned_month > $expected_month && $returned_year === $expected_year) {
            $book_fine = abs($expected_month - $returned_month) * 500;
            $book_fine = number_format($book_fine, 2, '.', ',');
        } elseif ($returned_year > $expected_year) {
            $book_fine = number_format(10000, 2, '.', ',');
        } else {
            $book_fine = number_format(0, 2);
        }
        $gridDataProvider = new CArrayDataProvider(array(
            array(
                'id'                       => 1,
                'bookTitle'                => 'Book 1',
                'bookExpectedReturnedDate' => '9-25-2015',
                'bookReturnedDate'         => '9-29-2015',
                'bookFine'                 => $book_fine,
            ),
        ));
        $this->render('bookfine', array('gridDataProvider' => $gridDataProvider));
    }

    public function actionDecentNumber()
    {
        $decent_number_model = new DecentNumberForm;
        $no_of_3s            = '3';
        $no_of_5s            = '5';
        $num_multiplier      = 0;

        if (isset($_POST['DecentNumberForm'])) {
            $key_number = implode($_POST['DecentNumberForm']);

            switch ($key_number % 3) {
                case 0:
                    $num_multiplier = 0;
                    break;
                case 1:
                    $num_multiplier = 2;
                    break;
                case 2:
                    $num_multiplier = 1;
                    break;
            }

            if (5 * $num_multiplier <= $key_number) {
                $decent_number = str_repeat($no_of_5s, (int)$key_number - 5 * (int)$num_multiplier).
                    str_repeat($no_of_3s, 5 * (int)$num_multiplier);
            } else {
                $decent_number = '-1';
            }

            Yii::app()->user->setFlash('success',
                'The Decent number is '.$decent_number);
            $this->refresh();
        }
        $this->render('decentnumber', array('decent_number_model' => $decent_number_model));
    }

    public function actionPerfectSquare()
    {
        $square_count = 0;
        $square_root  = array();

        for ($base_number = 10; $base_number <= 10000; $base_number++) {
            $square_number  = sqrt($base_number);
            $round_number   = floor($square_number);
            $perfect_square = $square_number - $round_number;

            if ($perfect_square == 0) {
                $square_root[$square_count] = $base_number;
                $square_count++;
            }
        }

        $this->render('perfectsquare', array('square_root' => $square_root, 'square_count' => $square_count));
    }
}