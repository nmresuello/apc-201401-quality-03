<?php
$this->breadcrumbs=array(
	'Ranks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List of Ranks', 'url'=>array('index')),
	array('label'=>'Create Rank', 'url'=>array('create')),
	array('label'=>'Update Rank', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Rank', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rank', 'url'=>array('admin')),
);
?>

<h1>Rank <?php echo $model->code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'cssFile' => Yii::app()->request->baseUrl . '/css/dtlview.css',
	'data'=>$model,
	'attributes'=>array(
		/** 'id', */
		'code',
		'name',
		'description',
	),
)); ?>
