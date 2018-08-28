<?php
$this->pageTitle = Yii::app()->name.' - Practice Five';
?>

<h2 align="center">Fizz Buzz</h2>

<div class="container" align="center">
    List of numbers ranging 1-1000:
    <br>
    <select multiple class="form-control">
        <?php
        foreach ($fizzBuzz as $fb) {
            echo '<option>"'.($fb).'"</option>';
        }
        ?>
    </select>
</div>
