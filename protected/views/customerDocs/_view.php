<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerDocsID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CustomerDocsID), array('view', 'id'=>$data->CustomerDocsID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerID')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocType')); ?>:</b>
	<?php echo CHtml::encode($data->DocType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocNumber')); ?>:</b>
	<?php echo CHtml::encode($data->DocNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IssueDate')); ?>:</b>
	<?php echo CHtml::encode($data->IssueDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ExpiryDate')); ?>:</b>
	<?php echo CHtml::encode($data->ExpiryDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocImage')); ?>:</b>
	<?php echo CHtml::encode($data->DocImage); ?>
	<br />


</div>