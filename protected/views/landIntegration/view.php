<?php
$this->breadcrumbs=array(
	'Land Integrations'=>array('index'),
	$model->LandIntegrationID,
);

$this->menu=array(
	array('label'=>'List LandIntegration', 'url'=>array('index')),
	array('label'=>'Create LandIntegration', 'url'=>array('create')),
	array('label'=>'Update LandIntegration', 'url'=>array('update', 'id'=>$model->LandIntegrationID)),
	array('label'=>'Delete LandIntegration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->LandIntegrationID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LandIntegration', 'url'=>array('admin')),
);
?>

<h1>View LandIntegration #<?php echo $model->LandIntegrationID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'LandIntegrationID',
		'Land_ID',
		'Municipality_ID',
		'SchemeDrawing',
		'SatelliteImage',
		'DateInserted',
		'Active',
	),
)); ?>
