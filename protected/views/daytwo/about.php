<?php
$this->pageTitle = Yii::app()->name.' - Day 2';
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', [
    'heading' => 'Day 2 Onboarding Exercises',
]); ?>

<?php $this->endWidget(); ?>

<ul>
    <li>Practice 6</li>
    <ul>
        <p>
            Write a program to calculate the Fine.
            The Head Librarian at a library wants you to make a program that calculates the fine for returning the book
            after the return date.
            You are given the actual and the expected return dates.
            Calculate the fine as follows:
        </p>
        <ul>
            <li>If the book is returned on or before the expected return date, no fine will be charged, in other words
                fine
                is 0 peso.
            </li>
            <li>If the book is returned in the same month as the expected return date, Fine = 15 peso × Number of late
                days
            </li>
            <li>If the book is not returned in the same month but in the same year as the expected return date, Fine =
                500
                peso × Number of late months
            </li>
            <li>If the book is not returned in the same year, the fine is fixed at 10,000 peso.</li>
        </ul>
        <br>
        <p>Define the dates like following:</p>
        <ul>
            <li>$expected_year = 2015;</li>
            <li>$expected_month = 9;</li>
            <li>$expected_day = 25;</li>
            <li>$returned_year = 2015;</li>
            <li>$returned_month = 9;</li>
            <li>$returned_day = 29;</li>
        </ul>
    </ul>
    <br>
    <li>Practice 7</li>
    <ul>
        <p>
            Sherlock Holmes is getting paranoid about Professor Moriarty, his arch-enemy. All his efforts to subdue
            Moriarty
            have been in vain. These days Sherlock is working on a problem with Dr. Watson. Watson mentioned that the
            CIA
            has been facing weird problems with their supercomputer, 'The Beast', recently.
            This afternoon, Sherlock received a note from Moriarty, saying that he has infected 'The Beast' with a
            virus.
            Moreover, the note had the number N printed on it. After doing some calculations, Sherlock figured out that
            the
            key to remove the virus is the largest Decent Number having N digits.
        </p>
        <p>A Decent Number has the following properties:</p>
        <ul>
            <li>3, 5, or both as its digits. No other digit is allowed.</li>
            <li>Number of times 3 appears is divisible by 5.</li>
            <li>Number of times 5 appears is divisible by 3.</li>
        </ul>
        <br>
        <p>Meanwhile, the counter to the destruction of 'The Beast' is running very fast. Can you save 'The Beast', and
            find the key before Sherlock?
        </p>
        <p>Largest Decent Number having N digits. If no such number exists, tell Sherlock that he is wrong and print
            −1.
        </p>
        <p>Examples:</p>
        <ul>
            <li>If N = 1, Decent Number is -1.</li>
            <li>If N = 3, Decent Number is 555.</li>
            <li>If N = 5, Decent Number is 33333.</li>
            <li>If N = 11, Decent Number is 55555533333.</li>
        </ul>
    </ul>
    <br>
    <li>Practice 8</li>
    <ul>
        <p>Watson gives two integers (A and B) to Sherlock and asks if he can count the number of square integers
            between A and B (both inclusive).
        </p>
        <p><b>Note:</b>&nbspA square integer is an integer which is the square of any integer. For example, 1, 4, 9, and
            16
            are some of the square integers as they are squares of 1, 2, 3, and 4, respectively.
        </p>
        <ul>
            <li>If A = 3, B = 9 the count = 2 (4 and 9).</li>
            <li>If A = 17, B = 24 the count = 0.</li>
            <li>How about if A = 10, B = 10000?</li>
        </ul>
    </ul>
</ul>