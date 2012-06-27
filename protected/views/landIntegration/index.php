<?php
$this->breadcrumbs=array(
	'Land Integrations',
);

$this->menu=array(
	array('label'=>'Create LandIntegration', 'url'=>array('create')),
	array('label'=>'Manage LandIntegration', 'url'=>array('admin')),
);
?>

<h1>Land Integrations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
