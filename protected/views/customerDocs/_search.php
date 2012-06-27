<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CustomerDocsID'); ?>
		<?php echo $form->textField($model,'CustomerDocsID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CustomerID'); ?>
		<?php echo $form->textField($model,'CustomerID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DocType'); ?>
		<?php echo $form->textField($model,'DocType',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DocNumber'); ?>
		<?php echo $form->textField($model,'DocNumber',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IssueDate'); ?>
		<?php echo $form->textField($model,'IssueDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ExpiryDate'); ?>
		<?php echo $form->textField($model,'ExpiryDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DocImage'); ?>
		<?php echo $form->textField($model,'DocImage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->