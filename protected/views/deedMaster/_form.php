<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'deed-master-form',
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
		<?php echo $form->labelEx($model,'Land_ID'); ?>
		<?php echo $form->textField($model,'Land_ID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Land_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
		<?php echo $form->error($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Source'); ?>
		<?php echo $form->textField($model,'Source',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'Source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SchemeDrawing'); ?>
		<?php echo $form->textField($model,'SchemeDrawing',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'SchemeDrawing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ApprovedBy'); ?>
		<?php echo $form->textField($model,'ApprovedBy',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ApprovedBy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->