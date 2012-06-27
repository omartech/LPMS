<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('LandIntegrationID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->LandIntegrationID), array('view', 'id'=>$data->LandIntegrationID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Land_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Land_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Municipality_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Municipality_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SchemeDrawing')); ?>:</b>
	<?php echo CHtml::encode($data->SchemeDrawing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SatelliteImage')); ?>:</b>
	<?php echo CHtml::encode($data->SatelliteImage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateInserted')); ?>:</b>
	<?php echo CHtml::encode($data->DateInserted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Active')); ?>:</b>
	<?php echo CHtml::encode($data->Active); ?>
	<br />


</div>