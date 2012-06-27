<?php
$this->breadcrumbs=array(
	'Deed Masters'=>array('index'),
	$model->DeedID,
);

$this->menu=array(
	array('label'=>'List DeedMaster', 'url'=>array('index')),
	array('label'=>'Create DeedMaster', 'url'=>array('create')),
	array('label'=>'Update DeedMaster', 'url'=>array('update', 'id'=>$model->DeedID)),
	array('label'=>'Delete DeedMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DeedID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeedMaster', 'url'=>array('admin')),
);
?>

<h1>View DeedMaster #<?php echo $model->DeedID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DeedID',
		'Land_ID',
		'DateCreated',
		'Source',
		'SchemeDrawing',
		'Status',
		'UserID',
		'ApprovedBy',
	),
)); ?>
