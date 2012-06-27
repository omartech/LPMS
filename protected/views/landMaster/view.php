<?php
$this->breadcrumbs=array(
	'Land Masters'=>array('index'),
	$model->Land_ID,
);

$this->menu=array(
	array('label'=>'List LandMaster', 'url'=>array('index')),
	array('label'=>'Create LandMaster', 'url'=>array('create')),
	array('label'=>'Update LandMaster', 'url'=>array('update', 'id'=>$model->Land_ID)),
	array('label'=>'Delete LandMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Land_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LandMaster', 'url'=>array('admin')),
);
?>

<h1>View LandMaster #<?php echo $model->Land_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Land_ID',
		'Area_ID',
		'Plot_No',
		'Land_Type',
	),
)); ?>
