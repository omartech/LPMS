<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('LandDetailID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->LandDetailID), array('view', 'id'=>$data->LandDetailID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Land_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Land_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direction')); ?>:</b>
	<?php echo CHtml::encode($data->Direction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dimension')); ?>:</b>
	<?php echo CHtml::encode($data->Dimension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />


</div>