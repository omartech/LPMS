<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Land_ID'); ?>
		<?php echo $form->textField($model,'Land_ID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Area_ID'); ?>
		<?php echo $form->textField($model,'Area_ID',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Plot_No'); ?>
		<?php echo $form->textField($model,'Plot_No'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Land_Type'); ?>
		<?php echo $form->textField($model,'Land_Type',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->