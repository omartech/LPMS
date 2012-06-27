<?php
$this->breadcrumbs=array(
	'Land Fines'=>array('index'),
	$model->LandFinesID=>array('view','id'=>$model->LandFinesID),
	'Update',
);

$this->menu=array(
	array('label'=>'List LandFines', 'url'=>array('index')),
	array('label'=>'Create LandFines', 'url'=>array('create')),
	array('label'=>'View LandFines', 'url'=>array('view', 'id'=>$model->LandFinesID)),
	array('label'=>'Manage LandFines', 'url'=>array('admin')),
);
?>

<h1>Update LandFines <?php echo $model->LandFinesID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>