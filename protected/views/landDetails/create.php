<?php
$this->breadcrumbs=array(
	'Land Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LandDetails', 'url'=>array('index')),
	array('label'=>'Manage LandDetails', 'url'=>array('admin')),
);
?>

<h1>Create LandDetails</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>