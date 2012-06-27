<?php
$this->breadcrumbs=array(
	'Land Details',
);

$this->menu=array(
	array('label'=>'Create LandDetails', 'url'=>array('create')),
	array('label'=>'Manage LandDetails', 'url'=>array('admin')),
);
?>

<h1>Land Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
