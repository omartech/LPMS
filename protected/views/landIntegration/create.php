<?php
$this->breadcrumbs=array(
	'Land Integrations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LandIntegration', 'url'=>array('index')),
	array('label'=>'Manage LandIntegration', 'url'=>array('admin')),
);
?>

<h1>Create LandIntegration</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>