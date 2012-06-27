<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CustomerID), array('view', 'id'=>$data->CustomerID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerNameArabic')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerNameArabic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerNameEnglish')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerNameEnglish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HomeAddress')); ?>:</b>
	<?php echo CHtml::encode($data->HomeAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HomePhone')); ?>:</b>
	<?php echo CHtml::encode($data->HomePhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MobilePhone')); ?>:</b>
	<?php echo CHtml::encode($data->MobilePhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateofBirth')); ?>:</b>
	<?php echo CHtml::encode($data->DateofBirth); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Nationality')); ?>:</b>
	<?php echo CHtml::encode($data->Nationality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Signature')); ?>:</b>
	<?php echo CHtml::encode($data->Signature); ?>
	<br />

	*/ ?>

</div>