<?php
$this->breadcrumbs=array(
	'Customer Masters'=>array('index'),
	$model->CustomerID=>array('view','id'=>$model->CustomerID),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomerMaster', 'url'=>array('index')),
	array('label'=>'Create CustomerMaster', 'url'=>array('create')),
	array('label'=>'View CustomerMaster', 'url'=>array('view', 'id'=>$model->CustomerID)),
	array('label'=>'Manage CustomerMaster', 'url'=>array('admin')),
);
?>

<h1>Update CustomerMaster <?php echo $model->CustomerID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>