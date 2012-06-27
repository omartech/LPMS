<?php
$this->breadcrumbs=array(
	'Deed Details'=>array('index'),
	$model->DeedDetailsID,
);

$this->menu=array(
	array('label'=>'List DeedDetails', 'url'=>array('index')),
	array('label'=>'Create DeedDetails', 'url'=>array('create')),
	array('label'=>'Update DeedDetails', 'url'=>array('update', 'id'=>$model->DeedDetailsID)),
	array('label'=>'Delete DeedDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DeedDetailsID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeedDetails', 'url'=>array('admin')),
);
?>

<h1>View DeedDetails #<?php echo $model->DeedDetailsID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DeedDetailsID',
		'DeedID',
		'CustomerID',
		'Share',
	),
)); ?>
