<?php
$this->breadcrumbs=array(
	'Land Fines',
);

$this->menu=array(
	array('label'=>'Create LandFines', 'url'=>array('create')),
	array('label'=>'Manage LandFines', 'url'=>array('admin')),
);
?>

<h1>Land Fines</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
