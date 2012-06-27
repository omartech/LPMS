<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-docs-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerID'); ?>
		<?php echo $form->textField($model,'CustomerID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CustomerID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocType'); ?>
		<?php echo $form->textField($model,'DocType',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'DocType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocNumber'); ?>
		<?php echo $form->textField($model,'DocNumber',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'DocNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IssueDate'); ?>
		<?php echo $form->textField($model,'IssueDate'); ?>
		<?php echo $form->error($model,'IssueDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ExpiryDate'); ?>
		<?php echo $form->textField($model,'ExpiryDate'); ?>
		<?php echo $form->error($model,'ExpiryDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocImage'); ?>
		<?php echo $form->textField($model,'DocImage'); ?>
		<?php echo $form->error($model,'DocImage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->