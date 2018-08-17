<?php
$this->pageTitle = Yii::app()->name.' - Practice Four';
?>

<h2>Get Factorial of a Number</h2>

<?php if (Yii::app()->user->hasFlash('success')): ?>
    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'     => true,
        'fade'      => true,
        'closeText' => '&times;',
        'alerts'    => array(
            'success' => array('block' => true, 'fade' => true, 'closeText' => '&times;'),
        ),
    )); ?>
<?php else: ?>

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'                     => 'factorialForm',
        'htmlOptions'            => array('class' => 'well'),
        'enableClientValidation' => true,
        'clientOptions'          => array(
            'validateOnSubmit' => true,
        ),
    )); ?>

    <?php echo $form->textFieldRow($factorial_model, 'base_number'); ?>
    <div class="form">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type'       => 'primary',
            'label'      => 'Calculate',
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

<?php endif; ?>
