<?php
$this->breadcrumbs=array(
	'Mortgage Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MortgageMaster', 'url'=>array('index')),
	array('label'=>'Manage MortgageMaster', 'url'=>array('admin')),
);
?>

<h1>Create MortgageMaster</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>