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

<?php $this->widget('bootstrap.widgets.TbNavbar', [
    'collapse' => true,
    'items'    => [
        [
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                [
                    'label' => 'Day 1 Exercises',
                    'items' => [
                        ['label' => 'Practice Exercise Instruction', 'url' => ['/dayone/about']],
                        ['label' => 'Exercise 1', 'url' => ['/dayone/number']],
                        ['label' => 'Exercise 2', 'url' => ['/dayone/summation']],
                        ['label' => 'Exercise 3', 'url' => ['/dayone/nestedloop']],
                        ['label' => 'Exercise 4', 'url' => ['/dayone/factorial']],
                        ['label' => 'Exercise 5', 'url' => ['/dayone/fizzbuzz']],
                    ],
                ],
                [
                    'label' => 'Day 2 Exercises',
                    'items' => [
                        ['label' => 'Practice Exercise Instruction', 'url' => ['/daytwo/about']],
                        ['label' => 'Exercise 6', 'url' => ['/daytwo/bookfine']],
                        ['label' => 'Exercise 7', 'url' => ['/daytwo/decentnumber']],
                        ['label' => 'Exercise 8', 'url' => ['/daytwo/perfectsquare']],
                    ],
                ],
                [
                    'label' => 'Day 3 Exercises',
                    'items' => [
                        ['label' => 'Practice Exercise Instruction', 'url' => ['/daythree/about']],
                        ['label' => 'Exercise 9', 'url' => ['/daythree/kaprekar']],
                        ['label' => 'Exercise 10', 'url' => ['/daythree/matrix']],
                    ],
                ],
            ],
        ],
    ],
]); ?>

<div class="container" id="page">

    <?php echo $content; ?>

    <div class="clear"></div>

</div><!-- page -->

<br><br>

</body>
</html>
