<?php
$this->breadcrumbs=array(
	'Deed Details'=>array('index'),
	$model->DeedDetailsID=>array('view','id'=>$model->DeedDetailsID),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeedDetails', 'url'=>array('index')),
	array('label'=>'Create DeedDetails', 'url'=>array('create')),
	array('label'=>'View DeedDetails', 'url'=>array('view', 'id'=>$model->DeedDetailsID)),
	array('label'=>'Manage DeedDetails', 'url'=>array('admin')),
);
?>

<h1>Update DeedDetails <?php echo $model->DeedDetailsID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>