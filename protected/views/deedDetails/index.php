<?php
$this->breadcrumbs=array(
	'Deed Details',
);

$this->menu=array(
	array('label'=>'Create DeedDetails', 'url'=>array('create')),
	array('label'=>'Manage DeedDetails', 'url'=>array('admin')),
);
?>

<h1>Deed Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
