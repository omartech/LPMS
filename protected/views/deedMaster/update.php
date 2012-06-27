<?php
$this->breadcrumbs=array(
	'Deed Masters'=>array('index'),
	$model->DeedID=>array('view','id'=>$model->DeedID),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeedMaster', 'url'=>array('index')),
	array('label'=>'Create DeedMaster', 'url'=>array('create')),
	array('label'=>'View DeedMaster', 'url'=>array('view', 'id'=>$model->DeedID)),
	array('label'=>'Manage DeedMaster', 'url'=>array('admin')),
);
?>

<h1>Update DeedMaster <?php echo $model->DeedID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>