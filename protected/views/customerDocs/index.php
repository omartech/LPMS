<?php
$this->breadcrumbs=array(
	'Customer Docs',
);

$this->menu=array(
	array('label'=>'Create CustomerDocs', 'url'=>array('create')),
	array('label'=>'Manage CustomerDocs', 'url'=>array('admin')),
);
?>

<h1>Customer Docs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
