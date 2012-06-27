<?php
$this->breadcrumbs=array(
	'Contracts Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContractsDetail', 'url'=>array('index')),
	array('label'=>'Manage ContractsDetail', 'url'=>array('admin')),
);
?>

<h1>Create ContractsDetail</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>