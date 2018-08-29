<?php
$this->pageTitle = Yii::app()->name.' - Practice Three';
?>

<h2 align="center">Print a Right Triangle Using Nested Loop</h2>

<div class="container">
    <h3>
        <?php
        foreach ($rightTriangle as $triangle) {
            echo implode($triangle);
            echo "<br>";
        }
        ?>
    </h3>
</div>
