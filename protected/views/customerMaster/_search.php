<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CustomerID'); ?>
		<?php echo $form->textField($model,'CustomerID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CustomerNameArabic'); ?>
		<?php echo $form->textField($model,'CustomerNameArabic',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CustomerNameEnglish'); ?>
		<?php echo $form->textField($model,'CustomerNameEnglish',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HomeAddress'); ?>
		<?php echo $form->textField($model,'HomeAddress',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HomePhone'); ?>
		<?php echo $form->textField($model,'HomePhone',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MobilePhone'); ?>
		<?php echo $form->textField($model,'MobilePhone',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateofBirth'); ?>
		<?php echo $form->textField($model,'DateofBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nationality'); ?>
		<?php echo $form->textField($model,'Nationality',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Signature'); ?>
		<?php echo $form->textField($model,'Signature'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->