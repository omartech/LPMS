<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-master-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerNameArabic'); ?>
		<?php echo $form->textField($model,'CustomerNameArabic',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'CustomerNameArabic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerNameEnglish'); ?>
		<?php echo $form->textField($model,'CustomerNameEnglish',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'CustomerNameEnglish'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HomeAddress'); ?>
		<?php echo $form->textField($model,'HomeAddress',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'HomeAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HomePhone'); ?>
		<?php echo $form->textField($model,'HomePhone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HomePhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MobilePhone'); ?>
		<?php echo $form->textField($model,'MobilePhone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'MobilePhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateofBirth'); ?>
		<?php echo $form->textField($model,'DateofBirth'); ?>
		<?php echo $form->error($model,'DateofBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nationality'); ?>
		<?php echo $form->textField($model,'Nationality',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Signature'); ?>
		<?php echo $form->textField($model,'Signature'); ?>
		<?php echo $form->error($model,'Signature'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->