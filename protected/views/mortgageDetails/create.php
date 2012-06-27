<?php
$this->breadcrumbs=array(
	'Mortgage Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MortgageDetails', 'url'=>array('index')),
	array('label'=>'Manage MortgageDetails', 'url'=>array('admin')),
);
?>

<h1>Create MortgageDetails</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>