<?php
$this->breadcrumbs=array(
	'Deed Masters',
);

$this->menu=array(
	array('label'=>'Create DeedMaster', 'url'=>array('create')),
	array('label'=>'Manage DeedMaster', 'url'=>array('admin')),
);
?>

<h1>Deed Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
