<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'land-master-form',
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
		<?php echo $form->labelEx($model,'Area_ID'); ?>
		<?php echo $form->textField($model,'Area_ID',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'Area_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Plot_No'); ?>
		<?php echo $form->textField($model,'Plot_No'); ?>
		<?php echo $form->error($model,'Plot_No'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Land_Type'); ?>
		<?php echo $form->textField($model,'Land_Type',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Land_Type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->