<?php
$this->breadcrumbs=array(
	'Customer Docs'=>array('index'),
	$model->CustomerDocsID,
);

$this->menu=array(
	array('label'=>'List CustomerDocs', 'url'=>array('index')),
	array('label'=>'Create CustomerDocs', 'url'=>array('create')),
	array('label'=>'Update CustomerDocs', 'url'=>array('update', 'id'=>$model->CustomerDocsID)),
	array('label'=>'Delete CustomerDocs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CustomerDocsID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerDocs', 'url'=>array('admin')),
);
?>

<h1>View CustomerDocs #<?php echo $model->CustomerDocsID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CustomerDocsID',
		'CustomerID',
		'DocType',
		'DocNumber',
		'IssueDate',
		'ExpiryDate',
		'DocImage',
	),
)); ?>
