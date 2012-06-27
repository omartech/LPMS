<?php
$this->breadcrumbs=array(
	'Contracts Masters'=>array('index'),
	$model->ContractsID,
);

$this->menu=array(
	array('label'=>'List ContractsMaster', 'url'=>array('index')),
	array('label'=>'Create ContractsMaster', 'url'=>array('create')),
	array('label'=>'Update ContractsMaster', 'url'=>array('update', 'id'=>$model->ContractsID)),
	array('label'=>'Delete ContractsMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ContractsID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContractsMaster', 'url'=>array('admin')),
);
?>

<h1>View ContractsMaster #<?php echo $model->ContractsID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ContractsID',
		'ContractType',
		'Land_ID',
		'NetAmount',
		'FeesCharged',
		'DateCreated',
		'UserID',
		'ApprovedBy',
	),
)); ?>
