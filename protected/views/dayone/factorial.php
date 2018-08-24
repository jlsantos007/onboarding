<?php
$this->pageTitle = Yii::app()->name.' - Practice Four';
?>

<h2>Get Factorial of a Number</h2>

<?php if (Yii::app()->user->hasFlash('success')): ?>
    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'     => true,
        'fade'      => true,
        'closeText' => '&times;',
        'alerts'    => [
            'success' => ['block' => true, 'fade' => true, 'closeText' => '&times;'],
        ],
    )); ?>
<?php else: ?>

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'                     => 'factorialForm',
        'htmlOptions'            => ['class' => 'well'],
        'enableClientValidation' => true,
        'clientOptions'          => [
            'validateOnSubmit' => true,
        ],
    )); ?>

    <?php echo $form->textFieldRow($factorialModel, 'baseNumber'); ?>
    <div class="form">
        <?php $this->widget('bootstrap.widgets.TbButton', [
            'buttonType' => 'submit',
            'type'       => 'primary',
            'label'      => 'Calculate',
        ]); ?>
    </div>

    <?php $this->endWidget(); ?>

<?php endif; ?>
