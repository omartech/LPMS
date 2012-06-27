<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MortgageDetailsID'); ?>
		<?php echo $form->textField($model,'MortgageDetailsID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MortgageID'); ?>
		<?php echo $form->textField($model,'MortgageID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TotalAmount'); ?>
		<?php echo $form->textField($model,'TotalAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mortgager'); ?>
		<?php echo $form->textField($model,'Mortgager',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PeriodOfTime'); ?>
		<?php echo $form->textField($model,'PeriodOfTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateClosed'); ?>
		<?php echo $form->textField($model,'DateClosed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FeesCharged'); ?>
		<?php echo $form->textField($model,'FeesCharged'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->