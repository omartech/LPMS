<?php
$this->breadcrumbs=array(
	'Contracts Details'=>array('index'),
	$model->ContractsDetailID=>array('view','id'=>$model->ContractsDetailID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContractsDetail', 'url'=>array('index')),
	array('label'=>'Create ContractsDetail', 'url'=>array('create')),
	array('label'=>'View ContractsDetail', 'url'=>array('view', 'id'=>$model->ContractsDetailID)),
	array('label'=>'Manage ContractsDetail', 'url'=>array('admin')),
);
?>

<h1>Update ContractsDetail <?php echo $model->ContractsDetailID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>