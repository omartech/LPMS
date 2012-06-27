<?php
$this->breadcrumbs=array(
	'Customer Docs'=>array('index'),
	$model->CustomerDocsID=>array('view','id'=>$model->CustomerDocsID),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomerDocs', 'url'=>array('index')),
	array('label'=>'Create CustomerDocs', 'url'=>array('create')),
	array('label'=>'View CustomerDocs', 'url'=>array('view', 'id'=>$model->CustomerDocsID)),
	array('label'=>'Manage CustomerDocs', 'url'=>array('admin')),
);
?>

<h1>Update CustomerDocs <?php echo $model->CustomerDocsID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>