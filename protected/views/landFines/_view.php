<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('LandFinesID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->LandFinesID), array('view', 'id'=>$data->LandFinesID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Land_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Land_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Flag')); ?>:</b>
	<?php echo CHtml::encode($data->Flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Remarks')); ?>:</b>
	<?php echo CHtml::encode($data->Remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fee')); ?>:</b>
	<?php echo CHtml::encode($data->Fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Cleared')); ?>:</b>
	<?php echo CHtml::encode($data->Cleared); ?>
	<br />

	*/ ?>

</div>