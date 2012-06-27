<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeedDetailsID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DeedDetailsID), array('view', 'id'=>$data->DeedDetailsID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeedID')); ?>:</b>
	<?php echo CHtml::encode($data->DeedID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerID')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Share')); ?>:</b>
	<?php echo CHtml::encode($data->Share); ?>
	<br />


</div>