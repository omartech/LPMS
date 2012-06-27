<?php
$this->breadcrumbs=array(
	'Land Masters'=>array('index'),
	$model->Land_ID=>array('view','id'=>$model->Land_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List LandMaster', 'url'=>array('index')),
	array('label'=>'Create LandMaster', 'url'=>array('create')),
	array('label'=>'View LandMaster', 'url'=>array('view', 'id'=>$model->Land_ID)),
	array('label'=>'Manage LandMaster', 'url'=>array('admin')),
);
?>

<h1>Update LandMaster <?php echo $model->Land_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>