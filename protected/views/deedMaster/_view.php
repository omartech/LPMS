<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeedID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DeedID), array('view', 'id'=>$data->DeedID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Land_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Land_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Source')); ?>:</b>
	<?php echo CHtml::encode($data->Source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SchemeDrawing')); ?>:</b>
	<?php echo CHtml::encode($data->SchemeDrawing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ApprovedBy')); ?>:</b>
	<?php echo CHtml::encode($data->ApprovedBy); ?>
	<br />

	*/ ?>

</div>