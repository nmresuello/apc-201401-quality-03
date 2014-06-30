<?php
$this->breadcrumbs=array(
	'Employees Payrolls',
);

$this->menu=array(
	array('label'=>'Create Employees Payroll', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('employeehaspayroll.create')),
	array('label'=>'Manage Employees Payroll', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('employeehaspayroll.admin')),
);
?>

<h1>Employees Payrolls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
