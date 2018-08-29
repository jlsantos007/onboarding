<?php
$this->pageTitle = Yii::app()->name.' - Practice Seven';
?>

<h2>Get Largest Decent Number</h2>

<?php if (Yii::app()->user->hasFlash('success')): ?>
    <?php $this->widget('bootstrap.widgets.TbAlert', [
        'block'     => true,
        'fade'      => true,
        'closeText' => '&times;',
        'alerts'    => [
            'success' => ['block' => true, 'fade' => true, 'closeText' => '&times;'],
        ],
    ]); ?>
<?php else: ?>

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
        'id'                     => 'decentNumberForm',
        'htmlOptions'            => ['class' => 'well'],
        'enableClientValidation' => true,
        'clientOptions'          => [
            'validateOnSubmit' => true,
        ],
    ]); ?>

    <?php echo $form->textFieldRow($decentNumberModel, 'keyNumber'); ?>

    <div class="form">
        <?php $this->widget('bootstrap.widgets.TbButton', [
            'buttonType' => 'submit',
            'type'       => 'primary',
            'label'      => 'Generate',
        ]); ?>
    </div>

    <?php $this->endWidget(); ?>

<?php endif; ?>
