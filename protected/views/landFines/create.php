<?php
$this->breadcrumbs=array(
	'Land Fines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LandFines', 'url'=>array('index')),
	array('label'=>'Manage LandFines', 'url'=>array('admin')),
);
?>

<h1>Create LandFines</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>