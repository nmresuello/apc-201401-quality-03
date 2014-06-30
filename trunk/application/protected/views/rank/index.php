<?php
$this->breadcrumbs=array(
	'Ranks',
);

$this->menu=array(
	array('label'=>'Create Rank', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('rank.create')),
	array('label'=>'Manage Rank', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('rank.admin')),
);
?>

<h1>Ranks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
