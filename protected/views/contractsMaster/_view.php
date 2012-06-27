<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContractsID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ContractsID), array('view', 'id'=>$data->ContractsID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContractType')); ?>:</b>
	<?php echo CHtml::encode($data->ContractType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Land_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Land_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NetAmount')); ?>:</b>
	<?php echo CHtml::encode($data->NetAmount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FeesCharged')); ?>:</b>
	<?php echo CHtml::encode($data->FeesCharged); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
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