<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <?php Yii::app()->bootstrap->register(); ?>
</head>

<body style="background-color: #7aba7b">

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'collapse' => true,
    'items'    => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => array(
                array('label' => 'Home', 'url' => array('/site/index')),
                array(
                    'label' => 'Day 1 Exercises',
                    'items' => array(
                        array('label' => 'Practice Exercise Instruction', 'url' => array('/dayone/about')),
                        array('label' => 'Exercise 1', 'url' => array('/dayone/number')),
                        array('label' => 'Exercise 2', 'url' => array('/dayone/summation')),
                        array('label' => 'Exercise 3', 'url' => array('/dayone/nestedloop')),
                        array('label' => 'Exercise 4', 'url' => array('/dayone/factorial')),
                        array('label' => 'Exercise 5', 'url' => array('/dayone/fizzbuzz')),
                    ),
                ),
                array(
                    'label' => 'Day 2 Exercises',
                    'items' => array(
                        array('label' => 'Practice Exercise Instruction', 'url' => array('/daytwo/about')),
                        array('label' => 'Exercise 6', 'url' => array('/daytwo/bookfine')),
                        array('label' => 'Exercise 7', 'url' => array('/daytwo/decentnumber')),
                        array('label' => 'Exercise 8', 'url' => array('/daytwo/perfectsquare')),
                    ),
                ),
                array(
                    'label' => 'Day 3 Exercises',
                    'items' => array(
                        array('label' => 'Practice Exercise Instruction', 'url' => array('/daythree/about')),
                        array('label' => 'Exercise 9', 'url' => array('/daythree/kaprekar')),
                        array('label' => 'Exercise 10', 'url' => array('/daythree/matrix')),
                    ),
                ),
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

    <?php echo $content; ?>

    <div class="clear"></div>

</div><!-- page -->

<br><br>

</body>
</html>
