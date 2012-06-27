<?php
$this->breadcrumbs=array(
	'Deed Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeedDetails', 'url'=>array('index')),
	array('label'=>'Manage DeedDetails', 'url'=>array('admin')),
);
?>

<h1>Create DeedDetails</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>