<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MortgageID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MortgageID), array('view', 'id'=>$data->MortgageID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Land_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Land_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerID')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApprovedBy')); ?>:</b>
	<?php echo CHtml::encode($data->ApprovedBy); ?>
	<br />


</div>