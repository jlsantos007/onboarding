<?php
$this->pageTitle = Yii::app()->name.' - Practice Nine';
?>

<h2 align="center">Kaprekar Numbers</h2>

<div class="container" align="center">
    <div class="row">
        <label>List of Kaprekar Numbers ranging 1-1000:</label>
    </div>
    <div class="row">
        <select multiple class="multiple">
            <?php
            foreach ($kaprekarNumbers as $kaprekar) {
                echo '<option>'.$kaprekar.'</option>';
            }
            ?>
        </select>
    </div>
</div>
