<?php
$this->breadcrumbs=array(
	'Mortgage Details'=>array('index'),
	$model->MortgageDetailsID=>array('view','id'=>$model->MortgageDetailsID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MortgageDetails', 'url'=>array('index')),
	array('label'=>'Create MortgageDetails', 'url'=>array('create')),
	array('label'=>'View MortgageDetails', 'url'=>array('view', 'id'=>$model->MortgageDetailsID)),
	array('label'=>'Manage MortgageDetails', 'url'=>array('admin')),
);
?>

<h1>Update MortgageDetails <?php echo $model->MortgageDetailsID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>