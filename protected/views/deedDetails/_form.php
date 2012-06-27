<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'deed-details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DeedID'); ?>
		<?php echo $form->textField($model,'DeedID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'DeedID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerID'); ?>
		<?php echo $form->textField($model,'CustomerID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CustomerID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Share'); ?>
		<?php echo $form->textField($model,'Share'); ?>
		<?php echo $form->error($model,'Share'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->