<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contracts-master-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ContractType'); ?>
		<?php echo $form->textField($model,'ContractType',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ContractType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Land_ID'); ?>
		<?php echo $form->textField($model,'Land_ID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Land_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NetAmount'); ?>
		<?php echo $form->textField($model,'NetAmount'); ?>
		<?php echo $form->error($model,'NetAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FeesCharged'); ?>
		<?php echo $form->textField($model,'FeesCharged'); ?>
		<?php echo $form->error($model,'FeesCharged'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
		<?php echo $form->error($model,'DateCreated'); ?>
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