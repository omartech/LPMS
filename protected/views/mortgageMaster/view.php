<?php
$this->breadcrumbs=array(
	'Mortgage Masters'=>array('index'),
	$model->MortgageID,
);

$this->menu=array(
	array('label'=>'List MortgageMaster', 'url'=>array('index')),
	array('label'=>'Create MortgageMaster', 'url'=>array('create')),
	array('label'=>'Update MortgageMaster', 'url'=>array('update', 'id'=>$model->MortgageID)),
	array('label'=>'Delete MortgageMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MortgageID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MortgageMaster', 'url'=>array('admin')),
);
?>

<h1>View MortgageMaster #<?php echo $model->MortgageID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MortgageID',
		'Land_ID',
		'CustomerID',
		'DateCreated',
		'UserID',
		'ApprovedBy',
	),
)); ?>
