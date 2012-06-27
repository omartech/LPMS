<?php
$this->breadcrumbs=array(
	'Deed Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeedMaster', 'url'=>array('index')),
	array('label'=>'Manage DeedMaster', 'url'=>array('admin')),
);
?>

<h1>Create DeedMaster</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>