<?php
$this->pageTitle = Yii::app()->name.' - Practice 6';
?>

<h2 align="center">Book Fine Calculation</h2>

<br>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'type'         => 'bordered',
    'dataProvider' => $gridDataProvider,
    'template'     => "{items}",
    'columns'      => array(
        array('name' => 'id', 'header' => 'Book No.'),
        array('name' => 'bookTitle', 'header' => 'Book Title'),
        array('name' => 'bookExpectedReturnedDate', 'header' => 'Book Expected Returned Date'),
        array('name' => 'bookReturnedDate', 'header' => 'Book Returned Date'),
        array('name' => 'bookFine', 'header' => 'Book Fine'),
    ),
));
?>