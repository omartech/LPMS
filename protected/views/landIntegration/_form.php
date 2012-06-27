<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'land-integration-form',
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
		<?php echo $form->labelEx($model,'Municipality_ID'); ?>
		<?php echo $form->textField($model,'Municipality_ID',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Municipality_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SchemeDrawing'); ?>
		<?php echo $form->textField($model,'SchemeDrawing'); ?>
		<?php echo $form->error($model,'SchemeDrawing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SatelliteImage'); ?>
		<?php echo $form->textField($model,'SatelliteImage'); ?>
		<?php echo $form->error($model,'SatelliteImage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateInserted'); ?>
		<?php echo $form->textField($model,'DateInserted'); ?>
		<?php echo $form->error($model,'DateInserted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Active'); ?>
		<?php echo $form->textField($model,'Active'); ?>
		<?php echo $form->error($model,'Active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->