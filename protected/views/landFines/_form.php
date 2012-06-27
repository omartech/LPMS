<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'land-fines-form',
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
		<?php echo $form->labelEx($model,'Flag'); ?>
		<?php echo $form->textField($model,'Flag',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
		<?php echo $form->error($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Remarks'); ?>
		<?php echo $form->textField($model,'Remarks',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fee'); ?>
		<?php echo $form->textField($model,'Fee'); ?>
		<?php echo $form->error($model,'Fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cleared'); ?>
		<?php echo $form->textField($model,'Cleared'); ?>
		<?php echo $form->error($model,'Cleared'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->