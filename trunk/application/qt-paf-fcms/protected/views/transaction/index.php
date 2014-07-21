<?php
$this->breadcrumbs=array(
	'Transactions',
);

$this->menu=array(
	array('label'=>'Create Transaction', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('transaction.create')),
	array('label'=>'Manage Transaction', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('transaction.admin')),
);
?>

<h1>Transactions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
