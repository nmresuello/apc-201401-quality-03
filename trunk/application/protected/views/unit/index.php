<?php
$this->breadcrumbs=array(
	'Units',
);

$this->menu=array(
	array('label'=>'Create Unit', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('unit.create')),
	array('label'=>'Manage Unit', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('unit.admin')),
);
?>

<h1>Units</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
