<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('AreaID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->AreaID), array('view', 'id'=>$data->AreaID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AreaName')); ?>:</b>
	<?php echo CHtml::encode($data->AreaName); ?>
	<br />


</div>