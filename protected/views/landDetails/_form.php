<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'land-details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Land_ID'); ?>
		<?php echo $form->textField($model,'Land_ID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Land_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direction'); ?>
		<?php echo $form->textField($model,'Direction',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Direction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dimension'); ?>
		<?php echo $form->textField($model,'Dimension'); ?>
		<?php echo $form->error($model,'Dimension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->