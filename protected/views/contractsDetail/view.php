<?php
$this->breadcrumbs=array(
	'Contracts Details'=>array('index'),
	$model->ContractsDetailID,
);

$this->menu=array(
	array('label'=>'List ContractsDetail', 'url'=>array('index')),
	array('label'=>'Create ContractsDetail', 'url'=>array('create')),
	array('label'=>'Update ContractsDetail', 'url'=>array('update', 'id'=>$model->ContractsDetailID)),
	array('label'=>'Delete ContractsDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ContractsDetailID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContractsDetail', 'url'=>array('admin')),
);
?>

<h1>View ContractsDetail #<?php echo $model->ContractsDetailID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ContractsDetailID',
		'ContractID',
		'Type',
		'CustomerID',
		'Share',
	),
)); ?>
