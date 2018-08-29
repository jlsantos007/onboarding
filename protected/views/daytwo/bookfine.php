<?php
$this->pageTitle = Yii::app()->name.' - Practice 6';
?>

<h2 align="center">Book Fine Calculation</h2>

<br>

<?php
$this->widget('bootstrap.widgets.TbGridView', [
    'type'         => 'bordered',
    'dataProvider' => $displayFine,
    'template'     => '{items}',
    'columns'      => [
        ['name' => 'id', 'header' => 'Book No.'],
        ['name' => 'bookTitle', 'header' => 'Book Title'],
        ['name' => 'bookExpectedReturnedDate', 'header' => 'Book Expected Returned Date'],
        ['name' => 'bookReturnedDate', 'header' => 'Book Returned Date'],
        ['name' => 'bookFine', 'header' => 'Book Fine'],
    ],
]);
?>