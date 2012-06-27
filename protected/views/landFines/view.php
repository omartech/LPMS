<?php
$this->breadcrumbs=array(
	'Land Fines'=>array('index'),
	$model->LandFinesID,
);

$this->menu=array(
	array('label'=>'List LandFines', 'url'=>array('index')),
	array('label'=>'Create LandFines', 'url'=>array('create')),
	array('label'=>'Update LandFines', 'url'=>array('update', 'id'=>$model->LandFinesID)),
	array('label'=>'Delete LandFines', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->LandFinesID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LandFines', 'url'=>array('admin')),
);
?>

<h1>View LandFines #<?php echo $model->LandFinesID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'LandFinesID',
		'Land_ID',
		'Flag',
		'DateCreated',
		'Remarks',
		'Fee',
		'UserID',
		'Cleared',
	),
)); ?>
