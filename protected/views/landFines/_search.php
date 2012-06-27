<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'LandFinesID'); ?>
		<?php echo $form->textField($model,'LandFinesID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Land_ID'); ?>
		<?php echo $form->textField($model,'Land_ID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Flag'); ?>
		<?php echo $form->textField($model,'Flag',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Remarks'); ?>
		<?php echo $form->textField($model,'Remarks',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fee'); ?>
		<?php echo $form->textField($model,'Fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cleared'); ?>
		<?php echo $form->textField($model,'Cleared'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->