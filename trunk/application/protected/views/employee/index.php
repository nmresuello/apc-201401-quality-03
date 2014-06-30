<?php
$this->breadcrumbs=array(
	'Employees',
);

$this->menu=array(
	array('label'=>'Create Employee', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('employee.create')),
	array('label'=>'Manage Employee', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('employee.admin')),
);
?>

<h1>Employees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
