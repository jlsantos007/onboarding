<?php
$this->pageTitle   = Yii::app()->name.' - Practice Ten';
?>

<h1 align="center">Matrix Anti-Clockwise Rotation</h1>

<table class="table table-bordered">
    <?php
    foreach ($matrix as $mx) {
        echo '<tr>'.implode($mx).'</tr>';
    }
    ?>
</table>
<br>
<table class="table table-bordered">
    <?php
    foreach ($new_matrix as $rm) {
        echo '<tr>'.implode($rm).'</tr>';
    }
    ?>
</table>