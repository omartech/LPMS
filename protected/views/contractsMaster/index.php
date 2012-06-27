<?php
$this->breadcrumbs=array(
	'Contracts Masters',
);

$this->menu=array(
	array('label'=>'Create ContractsMaster', 'url'=>array('create')),
	array('label'=>'Manage ContractsMaster', 'url'=>array('admin')),
);
?>

<h1>Contracts Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
