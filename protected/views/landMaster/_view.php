<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Land_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Land_ID), array('view', 'id'=>$data->Land_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Area_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Area_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Plot_No')); ?>:</b>
	<?php echo CHtml::encode($data->Plot_No); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Land_Type')); ?>:</b>
	<?php echo CHtml::encode($data->Land_Type); ?>
	<br />


</div>