<?php
$this->breadcrumbs=array(
	'Mortgage Details',
);

$this->menu=array(
	array('label'=>'Create MortgageDetails', 'url'=>array('create')),
	array('label'=>'Manage MortgageDetails', 'url'=>array('admin')),
);
?>

<h1>Mortgage Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
