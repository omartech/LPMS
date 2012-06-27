<?php
$this->breadcrumbs=array(
	'Customer Masters'=>array('index'),
	$model->CustomerID,
);

$this->menu=array(
	array('label'=>'List CustomerMaster', 'url'=>array('index')),
	array('label'=>'Create CustomerMaster', 'url'=>array('create')),
	array('label'=>'Update CustomerMaster', 'url'=>array('update', 'id'=>$model->CustomerID)),
	array('label'=>'Delete CustomerMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CustomerID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerMaster', 'url'=>array('admin')),
);
?>

<h1>View CustomerMaster #<?php echo $model->CustomerID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CustomerID',
		'CustomerNameArabic',
		'CustomerNameEnglish',
		'HomeAddress',
		'HomePhone',
		'MobilePhone',
		'DateofBirth',
		'Nationality',
		'Signature',
	),
)); ?>
