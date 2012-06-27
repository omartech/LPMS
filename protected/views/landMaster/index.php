<?php
$this->breadcrumbs=array(
	'Land Masters',
);

$this->menu=array(
	array('label'=>'Create LandMaster', 'url'=>array('create')),
	array('label'=>'Manage LandMaster', 'url'=>array('admin')),
);
?>

<h1>Land Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
