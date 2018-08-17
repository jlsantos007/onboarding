<?php
$this->pageTitle = Yii::app()->name.' - Day 3';
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading' => 'Day 3 Onboarding Exercises',
)); ?>

<?php $this->endWidget(); ?>

<ul>
    <li>Practice 9</li>
    <ul>
        <p>
            A modified Kaprekar number is a positive whole number n with d digits, such that when we split its square
            into two pieces - a right hand piece r with d digits and a left hand piece l that contains the remaining d
            or d−1 digits, the sum of the pieces is equal to the original number (i.e. l + r = n).
        </p>
        <p><b>Note:</b>&nbsp r may have leading zeros.</p>
        <p>Here's an explanation from Wikipedia about the ORIGINAL Kaprekar Number (spot the difference!): In
            mathematics, a Kaprekar number for a given base is a non-negative integer, the representation of whose
            square in that base can be split into two parts that add up to the original number again. For instance, 45
            is a Kaprekar number, because 45² = 2025 and 20+25 = 45.
        </p>
        <p>Output all Kaprekar number under 1000.</p>
    </ul>
    <li>Practice 10</li>
    <ul>
        <p>You are given a 2D matrix of dimension NxN and a positive integer R. You have to rotate the matrix R times
            and print the resultant matrix. Rotation should be in anti-clockwise direction.
        </p>
        <p>Example</p>
        <p>When R = 3</p>
        <p>1 &nbsp&nbsp&nbsp 2 &nbsp&nbsp&nbsp 3 &nbsp&nbsp&nbsp 4 &nbsp&nbsp&nbsp ==> &nbsp&nbsp&nbsp 2 &nbsp&nbsp&nbsp
            3 &nbsp&nbsp&nbsp 4 &nbsp&nbsp&nbsp 8 &nbsp&nbsp&nbsp ==> &nbsp&nbsp&nbsp 3 &nbsp&nbsp&nbsp 4
            &nbsp&nbsp&nbsp 8 &nbsp&nbsp&nbsp 12</p>
        <p>5 &nbsp&nbsp&nbsp 6 &nbsp&nbsp&nbsp 7 &nbsp&nbsp&nbsp 8 &nbsp&nbsp&nbsp ==> &nbsp&nbsp&nbsp 1 &nbsp&nbsp&nbsp
            7 &nbsp&nbsp&nbsp 11 &nbsp 12 &nbsp ==> &nbsp&nbsp&nbsp 2 &nbsp&nbsp&nbsp 11 &nbsp 10 &nbsp&nbsp 16</p>
        <p>9 &nbsp&nbsp 10 &nbsp&nbsp 11 &nbsp 12 &nbsp ==> &nbsp&nbsp&nbsp 5 &nbsp&nbsp&nbsp 6 &nbsp&nbsp&nbsp 10 &nbsp
            16 &nbsp ==> &nbsp&nbsp&nbsp 1 &nbsp&nbsp&nbsp 7 &nbsp&nbsp&nbsp 6 &nbsp&nbsp&nbsp 15</p>
        <p>13 &nbsp 14 &nbsp 15 &nbsp 16 &nbsp ==> &nbsp&nbsp&nbsp 9 &nbsp&nbsp 13 &nbsp&nbsp 14 &nbsp 15 &nbsp ==>
            &nbsp&nbsp&nbsp 5 &nbsp&nbsp&nbsp 9 &nbsp&nbsp 13 &nbsp&nbsp 14</p>
        <p>Sample definition of the matrix </p>
        <p>$matrix = array(array(1, 2, 3, 4),&nbsp
            &nbsp array(5, 6, 7, 8),
            &nbsp array(9, 10, 11, 12),
            &nbsp array(13, 14, 15, 16), );
        </p>
        <p>Write a program which can solve 6x6 or larger square rotations.</p>
    </ul>
</ul>