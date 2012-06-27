<?php
$this->breadcrumbs=array(
	'Areases'=>array('index'),
	$model->AreaID=>array('view','id'=>$model->AreaID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Areas', 'url'=>array('index')),
	array('label'=>'Create Areas', 'url'=>array('create')),
	array('label'=>'View Areas', 'url'=>array('view', 'id'=>$model->AreaID)),
	array('label'=>'Manage Areas', 'url'=>array('admin')),
);
?>

<h1>Update Areas <?php echo $model->AreaID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>