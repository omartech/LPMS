<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MortgageDetailsID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MortgageDetailsID), array('view', 'id'=>$data->MortgageDetailsID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MortgageID')); ?>:</b>
	<?php echo CHtml::encode($data->MortgageID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TotalAmount')); ?>:</b>
	<?php echo CHtml::encode($data->TotalAmount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mortgager')); ?>:</b>
	<?php echo CHtml::encode($data->Mortgager); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PeriodOfTime')); ?>:</b>
	<?php echo CHtml::encode($data->PeriodOfTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateClosed')); ?>:</b>
	<?php echo CHtml::encode($data->DateClosed); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FeesCharged')); ?>:</b>
	<?php echo CHtml::encode($data->FeesCharged); ?>
	<br />

	*/ ?>

</div>