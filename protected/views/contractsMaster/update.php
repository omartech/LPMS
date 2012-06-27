<?php
$this->breadcrumbs=array(
	'Contracts Masters'=>array('index'),
	$model->ContractsID=>array('view','id'=>$model->ContractsID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContractsMaster', 'url'=>array('index')),
	array('label'=>'Create ContractsMaster', 'url'=>array('create')),
	array('label'=>'View ContractsMaster', 'url'=>array('view', 'id'=>$model->ContractsID)),
	array('label'=>'Manage ContractsMaster', 'url'=>array('admin')),
);
?>

<h1>Update ContractsMaster <?php echo $model->ContractsID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>