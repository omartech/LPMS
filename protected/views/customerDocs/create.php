<?php
$this->breadcrumbs=array(
	'Customer Docs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomerDocs', 'url'=>array('index')),
	array('label'=>'Manage CustomerDocs', 'url'=>array('admin')),
);
?>

<h1>Create CustomerDocs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>