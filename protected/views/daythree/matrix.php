<?php
$this->pageTitle = Yii::app()->name.' - Practice Ten';
?>

    <h1 align="center">Matrix Anti-Clockwise Rotation</h1>

<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'                     => 'decentNumberForm',
    'htmlOptions'            => array('class' => 'well'),
    'enableClientValidation' => true,
    'clientOptions'          => array(
        'validateOnSubmit' => true,
    ),
)); ?>

<?php echo $form->textFieldRow($matrix_model, 'row_length'); ?>
<?php echo $form->textFieldRow($matrix_model, 'column_length'); ?>
<?php echo $form->textFieldRow($matrix_model, 'rotation'); ?>

    <div class="form">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type'       => 'primary',
            'label'      => 'Generate',
        )); ?>
    </div>

<?php $this->endWidget(); ?>