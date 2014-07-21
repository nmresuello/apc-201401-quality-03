<?php
$this->breadcrumbs=array(
	'Rank Histories',
);

$this->menu=array(
	array('label'=>'Create RankHistory', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('rankhistory.create')),
	array('label'=>'Manage RankHistory', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('rankhistory.admin')),
);
?>

<h1>Rank Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
