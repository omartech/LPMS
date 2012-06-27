<?php
$this->breadcrumbs=array(
	'Land Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LandMaster', 'url'=>array('index')),
	array('label'=>'Manage LandMaster', 'url'=>array('admin')),
);
?>

<h1>Create LandMaster</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>