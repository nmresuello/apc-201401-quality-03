<?php
$this->breadcrumbs=array(
	'Statuses',
);

$this->menu=array(
	array('label'=>'Create Status', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('status.create')),
	array('label'=>'Manage Status', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('status.admin')),
);
?>

<h1>Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
