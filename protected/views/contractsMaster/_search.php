<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ContractsID'); ?>
		<?php echo $form->textField($model,'ContractsID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContractType'); ?>
		<?php echo $form->textField($model,'ContractType',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Land_ID'); ?>
		<?php echo $form->textField($model,'Land_ID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NetAmount'); ?>
		<?php echo $form->textField($model,'NetAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FeesCharged'); ?>
		<?php echo $form->textField($model,'FeesCharged'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
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