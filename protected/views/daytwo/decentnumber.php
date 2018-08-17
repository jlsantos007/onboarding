<?php
$this->pageTitle = Yii::app()->name.' - Practice Seven';
?>

<h2>Get Largest Decent Number</h2>

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
        'id'                     => 'decentNumberForm',
        'htmlOptions'            => array('class' => 'well'),
        'enableClientValidation' => true,
        'clientOptions'          => array(
            'validateOnSubmit' => true,
        ),
    )); ?>

    <?php echo $form->textFieldRow($decent_number_model, 'key_number'); ?>

    <div class="form">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type'       => 'primary',
            'label'      => 'Generate',
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

<?php endif; ?>
