<?php
$this->breadcrumbs=array(
	'Contracts Details',
);

$this->menu=array(
	array('label'=>'Create ContractsDetail', 'url'=>array('create')),
	array('label'=>'Manage ContractsDetail', 'url'=>array('admin')),
);
?>

<h1>Contracts Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
