<?php
$this->breadcrumbs=array(
	'Departments',
);

$this->menu=array(
	array('label'=>'Create Department', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('department.create')),
	array('label'=>'Manage Department', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('department.admin')),

);
?>

<h1>Departments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
