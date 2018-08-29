<?php
$this->pageTitle   = Yii::app()->name.' - Practice Ten';
?>

<h1 align="center">Matrix Anti-Clockwise Rotation</h1>

<table class="table table-bordered">
    <?php
    foreach ($matrix as $originalMatrix) {
        echo '<tr>'.implode($originalMatrix).'</tr>';
    }
    ?>
</table>
<br>
<table class="table table-bordered">
    <?php
    foreach ($newMatrix as $rotatedMatrix) {
        echo '<tr>'.implode($rotatedMatrix).'</tr>';
    }
    ?>
</table>