<?php
$this->breadcrumbs=array(
	'Payrolls',
);

$this->menu=array(
	array('label'=>'Create Payroll', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('payroll.create')),
	array('label'=>'Manage Payroll', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('payroll.admin')),

);
?>

<h1>Payrolls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
