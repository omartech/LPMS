<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'DeedID'); ?>
		<?php echo $form->textField($model,'DeedID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Land_ID'); ?>
		<?php echo $form->textField($model,'Land_ID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Source'); ?>
		<?php echo $form->textField($model,'Source',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SchemeDrawing'); ?>
		<?php echo $form->textField($model,'SchemeDrawing',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status'); ?>
		<?php echo $form->textField($model,'Status',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ApprovedBy'); ?>
		<?php echo $form->textField($model,'ApprovedBy',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->