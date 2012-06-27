<?php
$this->breadcrumbs=array(
	'Mortgage Details'=>array('index'),
	$model->MortgageDetailsID,
);

$this->menu=array(
	array('label'=>'List MortgageDetails', 'url'=>array('index')),
	array('label'=>'Create MortgageDetails', 'url'=>array('create')),
	array('label'=>'Update MortgageDetails', 'url'=>array('update', 'id'=>$model->MortgageDetailsID)),
	array('label'=>'Delete MortgageDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MortgageDetailsID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MortgageDetails', 'url'=>array('admin')),
);
?>

<h1>View MortgageDetails #<?php echo $model->MortgageDetailsID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MortgageDetailsID',
		'MortgageID',
		'TotalAmount',
		'Mortgager',
		'PeriodOfTime',
		'DateCreated',
		'DateClosed',
		'FeesCharged',
	),
)); ?>
