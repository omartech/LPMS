<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mortgage-details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MortgageID'); ?>
		<?php echo $form->textField($model,'MortgageID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'MortgageID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TotalAmount'); ?>
		<?php echo $form->textField($model,'TotalAmount'); ?>
		<?php echo $form->error($model,'TotalAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mortgager'); ?>
		<?php echo $form->textField($model,'Mortgager',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Mortgager'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PeriodOfTime'); ?>
		<?php echo $form->textField($model,'PeriodOfTime'); ?>
		<?php echo $form->error($model,'PeriodOfTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
		<?php echo $form->error($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateClosed'); ?>
		<?php echo $form->textField($model,'DateClosed'); ?>
		<?php echo $form->error($model,'DateClosed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FeesCharged'); ?>
		<?php echo $form->textField($model,'FeesCharged'); ?>
		<?php echo $form->error($model,'FeesCharged'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->