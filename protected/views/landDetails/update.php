<?php
$this->breadcrumbs=array(
	'Land Details'=>array('index'),
	$model->LandDetailID=>array('view','id'=>$model->LandDetailID),
	'Update',
);

$this->menu=array(
	array('label'=>'List LandDetails', 'url'=>array('index')),
	array('label'=>'Create LandDetails', 'url'=>array('create')),
	array('label'=>'View LandDetails', 'url'=>array('view', 'id'=>$model->LandDetailID)),
	array('label'=>'Manage LandDetails', 'url'=>array('admin')),
);
?>

<h1>Update LandDetails <?php echo $model->LandDetailID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>