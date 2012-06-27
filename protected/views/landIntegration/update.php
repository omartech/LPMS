<?php
$this->breadcrumbs=array(
	'Land Integrations'=>array('index'),
	$model->LandIntegrationID=>array('view','id'=>$model->LandIntegrationID),
	'Update',
);

$this->menu=array(
	array('label'=>'List LandIntegration', 'url'=>array('index')),
	array('label'=>'Create LandIntegration', 'url'=>array('create')),
	array('label'=>'View LandIntegration', 'url'=>array('view', 'id'=>$model->LandIntegrationID)),
	array('label'=>'Manage LandIntegration', 'url'=>array('admin')),
);
?>

<h1>Update LandIntegration <?php echo $model->LandIntegrationID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>