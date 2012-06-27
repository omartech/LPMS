<?php
$this->breadcrumbs=array(
	'Customer Masters',
);

$this->menu=array(
	array('label'=>'Create CustomerMaster', 'url'=>array('create')),
	array('label'=>'Manage CustomerMaster', 'url'=>array('admin')),
);
?>

<h1>Customer Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
