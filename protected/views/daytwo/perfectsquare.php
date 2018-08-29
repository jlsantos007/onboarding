<?php

$this->pageTitle = Yii::app()->name.' - Practice Eight';

?>

<h2 align="center">Square of an Integer</h2>

<div class="container" align="center">
    <div class="row">
        Integer Range:
    </div>
    <div class="row">
        <input type="text" value="10-10000" disabled>
    </div>
    <br>
    <div class="row">
        Perfect Squares:
    </div>
    <div class="row">
        <select multiple class="multiple">
            <?php
            foreach ($squareRoot as $sr) {
                echo '<option>'.$sr.'</option>';
            }
            ?>
        </select>
    </div>
    <br>
    <div class="row">
        Number of Perfect Squares:
    </div>
    <div class="row">
        <input type="text" value="<?php echo $squareCount; ?>" disabled>
    </div>
</div>