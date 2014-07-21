<?php
$this->breadcrumbs=array(
	'Particulars',
);

$this->menu=array(
	array('label'=>'Create Particular', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('particular.create')),
	array('label'=>'Manage Particular', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('particular.admin')),
);
?>

<h1>Particulars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
