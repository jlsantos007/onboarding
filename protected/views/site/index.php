<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading' => 'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>

<?php $this->endWidget(); ?>

<p>The following are the contents of this Onboarding Exercises:</p>

<ul>
    <li>Day 1 Exercises</li>
    <ul>
        <li>Display 1-10 in one line</li>
        <li>Add all integers between 0 and 30</li>
        <li>Construct a program using nested loop</li>
        <li>Factorial of a number</li>
        <li>Fizz Buzz</li>
    </ul>
    <li>Day 2 Exercises</li>
    <ul>
        <li>Book Fine Calculator</li>
        <li>Largest Decent Number</li>
        <li>Square of an Integer</li>
    </ul>
    <li>Day 3 Exercises</li>
    <ul>
        <li>Kaprekar Numbers</li>
        <li>Matrix Anti-Clockwise Rotation</li>
    </ul>
</ul>
