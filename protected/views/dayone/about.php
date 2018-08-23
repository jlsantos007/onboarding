<?php
$this->pageTitle = Yii::app()->name.' - Day 1';
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading' => 'Day 1 Onboarding Exercises',
)); ?>

<?php $this->endWidget(); ?>

<ul>
    <li>Practice 1</li>
    <ul>
        <p>Write a program using a for loop that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hypen(-)
            at starting and ending position</p>
    </ul>
    <li>Practice 2</li>
    <ul>
        <p>Write a program using for loop to add all the integers between 0 and 30 and display the total</p>
    </ul>
    <li>Practice 3</li>
    <ul>
        <p>
            Write a program to construct the following pattern, using nested for loop.<br>
            *<br>
            * *<br>
            * * *<br>
            * * * *<br>
            * * * * *
        </p>
    </ul>
    <li>Practice 4</li>
    <ul>
        <p>Write a program to calculate and print the factorial of a number using a for loop.
            The factorial of a number is the product of all integers up to and including that number, so the factorial
            of 4 is 4 * 3 * 2 * 1 = 24
        </p>
    </ul>
    <li>Practice 5</li>
    <ul>
        <p>Write a program that prints the integers from 1 to 1000.
            But for multiples of three print "Fizz" instead of the number, and for the multiples of five print "Buzz".
            For numbers which are multiples of both three and five print "FizzBuzz".
            Example: 1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, 16, …
        </p>
    </ul>
</ul>