<?php
$this->pageTitle = Yii::app()->name.' - Practice Five';
?>

<h2 align="center">Fizz Buzz</h2>

<div class="container" align="center">
    <label>List of numbers ranging 1-1000:</label>
    <br>
    <select multiple class="form-control">
        <?php
        foreach ($fizz_buzz as $fb) {
            echo '<option>"'.($fb).'"</option>';
        }
        ?>
    </select>
</div>
