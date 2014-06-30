<?php
$this->breadcrumbs=array(
	'Unit Histories',
);

$this->menu=array(
	array('label'=>'Create UnitHistory', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('unithistory.create')),
	array('label'=>'Manage UnitHistory', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('unithistory.admin')),
);
?>

<h1>Unit Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
