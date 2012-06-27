<?php
$this->breadcrumbs=array(
	'Mortgage Masters'=>array('index'),
	$model->MortgageID=>array('view','id'=>$model->MortgageID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MortgageMaster', 'url'=>array('index')),
	array('label'=>'Create MortgageMaster', 'url'=>array('create')),
	array('label'=>'View MortgageMaster', 'url'=>array('view', 'id'=>$model->MortgageID)),
	array('label'=>'Manage MortgageMaster', 'url'=>array('admin')),
);
?>

<h1>Update MortgageMaster <?php echo $model->MortgageID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>