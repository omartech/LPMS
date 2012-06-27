<?php
$this->breadcrumbs=array(
	'Mortgage Masters',
);

$this->menu=array(
	array('label'=>'Create MortgageMaster', 'url'=>array('create')),
	array('label'=>'Manage MortgageMaster', 'url'=>array('admin')),
);
?>

<h1>Mortgage Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
