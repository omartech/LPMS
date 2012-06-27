<?php
$this->breadcrumbs=array(
	'Areases'=>array('index'),
	$model->AreaID,
);

$this->menu=array(
	array('label'=>'List Areas', 'url'=>array('index')),
	array('label'=>'Create Areas', 'url'=>array('create')),
	array('label'=>'Update Areas', 'url'=>array('update', 'id'=>$model->AreaID)),
	array('label'=>'Delete Areas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->AreaID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Areas', 'url'=>array('admin')),
);
?>

<h1>View Areas #<?php echo $model->AreaID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'AreaID',
		'AreaName',
	),
)); ?>
