<?php
$this->breadcrumbs=array(
	'Land Details'=>array('index'),
	$model->LandDetailID,
);

$this->menu=array(
	array('label'=>'List LandDetails', 'url'=>array('index')),
	array('label'=>'Create LandDetails', 'url'=>array('create')),
	array('label'=>'Update LandDetails', 'url'=>array('update', 'id'=>$model->LandDetailID)),
	array('label'=>'Delete LandDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->LandDetailID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LandDetails', 'url'=>array('admin')),
);
?>

<h1>View LandDetails #<?php echo $model->LandDetailID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'LandDetailID',
		'Land_ID',
		'Direction',
		'Dimension',
		'Description',
	),
)); ?>
