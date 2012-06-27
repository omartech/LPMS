<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'LandIntegrationID'); ?>
		<?php echo $form->textField($model,'LandIntegrationID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Land_ID'); ?>
		<?php echo $form->textField($model,'Land_ID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Municipality_ID'); ?>
		<?php echo $form->textField($model,'Municipality_ID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SchemeDrawing'); ?>
		<?php echo $form->textField($model,'SchemeDrawing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SatelliteImage'); ?>
		<?php echo $form->textField($model,'SatelliteImage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateInserted'); ?>
		<?php echo $form->textField($model,'DateInserted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Active'); ?>
		<?php echo $form->textField($model,'Active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->