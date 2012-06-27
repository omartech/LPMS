<?php
$this->breadcrumbs=array(
	'Contracts Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContractsMaster', 'url'=>array('index')),
	array('label'=>'Manage ContractsMaster', 'url'=>array('admin')),
);
?>

<h1>Create ContractsMaster</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>